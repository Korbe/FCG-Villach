// Minimaler Service Worker - dient nur dazu, dass der Browser die Seite als
// installierbare App (PWA / "Zum Startbildschirm hinzufügen") erkennt.
// Es wird bewusst NICHTS gecacht und kein respondWith() aufgerufen: jede
// Anfrage läuft normal über das Netzwerk, als gäbe es diesen Service Worker
// gar nicht. Das vermeidet die ganze Klasse an Caching-/Origin-Bugs (z.B.
// "about:srcdoc" mit origin null bei Navigationen), die eine eigene
// Fetch-Strategie sonst mit sich bringt.

const VERSION = 'v6';
const CACHE_NAME = `fcg-villach-${VERSION}`;

self.addEventListener('install', () => {
    self.skipWaiting();
});

// Alte Caches von früheren, komplexeren Service-Worker-Versionen entfernen.
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys()
            .then(keys => Promise.all(keys.map(key => caches.delete(key))))
            .then(() => self.clients.claim())
    );
});

// Muss vorhanden sein, damit Chrome/Edge die Seite als installierbar
// einstufen - bewusst ohne respondWith(), also reiner Pass-through.
self.addEventListener('fetch', () => {});
