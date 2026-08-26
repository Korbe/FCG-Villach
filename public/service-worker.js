const VERSION = 'v4';
const PRECACHE = `fcg-villach-precache-${VERSION}`;
const RUNTIME = `fcg-villach-runtime-${VERSION}`;

const OFFLINE_URL = '/offline.html';

// App-Shell: Dateien, die beim Install sofort gecacht werden.
// Nur wirklich statische, unveränderliche Dateien - keine Seiteninhalte,
// da diese sich sonst nie mehr aktualisieren.
const PRECACHE_ASSETS = [
    OFFLINE_URL,
    '/manifest.webmanifest',
    '/favicon.ico',
    '/favicon-16x16.png',
    '/favicon-32x32.png',
    '/apple-touch-icon.png',
    '/android-chrome-192x192.png',
];

// INSTALL
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(PRECACHE)
            .then(cache => cache.addAll(PRECACHE_ASSETS))
            .then(() => self.skipWaiting())
    );
});

// ACTIVATE - alte Cache-Versionen entfernen
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys()
            .then(keys => Promise.all(
                keys
                    .filter(key => key !== PRECACHE && key !== RUNTIME)
                    .map(key => caches.delete(key))
            ))
            .then(() => self.clients.claim())
    );
});

// FETCH
self.addEventListener('fetch', event => {
    const { request } = event;
    const url = new URL(request.url);

    // Nur GET, nur same-origin
    if (request.method !== 'GET' || url.origin !== self.location.origin) {
        return;
    }

    // Dashboard (authentifizierter Bereich) und Inertia-Navigationen nie
    // cachen, sonst zeigt die App nach Änderungen (z.B. Löschen) veraltete
    // Daten aus dem Cache statt den aktuellen Stand vom Server.
    if (url.pathname.startsWith('/dashboard') || request.headers.has('X-Inertia')) {
        return;
    }

    // Range-Requests (Audio/Video-Streaming) nicht cachen, die Cache API
    // unterstützt keine 206 Partial-Content-Antworten zuverlässig - das
    // würde Seeking/Streaming von Predigt-Aufnahmen kaputt machen.
    if (request.headers.has('Range')) {
        return;
    }

    // Seitennavigation (HTML-Dokumente): Network-first, damit Besucher
    // immer den aktuellen Inhalt sehen. Nur bei fehlendem Netzwerk auf
    // Cache bzw. die Offline-Seite zurückfallen.
    if (request.mode === 'navigate') {
        event.respondWith(networkFirst(request));
        return;
    }

    // Gehashte Build-Assets (/build/assets/...) ändern bei jeder inhaltlichen
    // Änderung ihren Dateinamen - daher unbedenklich dauerhaft cachen.
    if (url.pathname.startsWith('/build/')) {
        event.respondWith(cacheFirst(request));
        return;
    }

    // Alles andere (Icons, hochgeladene Fotos, sonstige öffentliche Assets):
    // Stale-while-revalidate - schnelle Antwort aus dem Cache, im
    // Hintergrund aber aktualisieren.
    event.respondWith(staleWhileRevalidate(request));
});

async function networkFirst(request) {
    try {
        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(RUNTIME);
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    } catch (err) {
        const cached = await caches.match(request);
        return cached || caches.match(OFFLINE_URL);
    }
}

async function cacheFirst(request) {
    const cached = await caches.match(request);
    if (cached) return cached;

    try {
        const networkResponse = await fetch(request);
        if (networkResponse.ok) {
            const cache = await caches.open(RUNTIME);
            cache.put(request, networkResponse.clone());
        }
        return networkResponse;
    } catch (err) {
        return new Response('Offline', { status: 503, statusText: 'Offline' });
    }
}

async function staleWhileRevalidate(request) {
    const cache = await caches.open(RUNTIME);
    const cached = await cache.match(request);

    const networkFetch = fetch(request)
        .then(networkResponse => {
            if (networkResponse.ok) {
                cache.put(request, networkResponse.clone());
            }
            return networkResponse;
        })
        .catch(() => null);

    if (cached) {
        // Im Hintergrund aktualisieren, aber nicht auf das Ergebnis warten
        networkFetch;
        return cached;
    }

    const networkResponse = await networkFetch;
    if (networkResponse) return networkResponse;

    if (request.destination === 'image') {
        return new Response('', { status: 404, statusText: 'Image not found' });
    }

    return new Response('Offline', { status: 503, statusText: 'Offline' });
}
