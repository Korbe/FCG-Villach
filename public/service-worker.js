const CACHE_NAME = 'fcg-villach-v1';

const STATIC_ASSETS = [
    '/',
    '/offline.html',
];

// INSTALL
self.addEventListener('install', event => {
    console.log('[SW] Install');

    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => {
            return cache.addAll(STATIC_ASSETS);
        })
    );

    self.skipWaiting();
});

// ACTIVATE
self.addEventListener('activate', event => {
    console.log('[SW] Activate');

    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(
                keys
                    .filter(key => key !== CACHE_NAME)
                    .map(key => caches.delete(key))
            )
        )
    );

    self.clients.claim();
});

// FETCH
self.addEventListener('fetch', event => {

    // Nur GET Requests
    if (event.request.method !== 'GET') return;

    event.respondWith(
        caches.match(event.request).then(cachedResponse => {

            // Cache Treffer
            if (cachedResponse) {
                return cachedResponse;
            }

            // Sonst Netzwerk
            return fetch(event.request)
                .then(networkResponse => {

                    // Nur gültige Responses cachen
                    if (
                        !networkResponse ||
                        networkResponse.status !== 200 ||
                        networkResponse.type !== 'basic'
                    ) {
                        return networkResponse;
                    }

                    // Dynamisch cachen
                    const responseClone = networkResponse.clone();

                    caches.open(CACHE_NAME).then(cache => {
                        cache.put(event.request, responseClone);
                    });

                    return networkResponse;
                })
                .catch(async () => {

                    // HTML Seiten
                    if (event.request.mode === 'navigate') {
                        return caches.match('/offline.html');
                    }

                    // Bilder Fallback optional
                    if (event.request.destination === 'image') {
                        return new Response('', {
                            status: 404,
                            statusText: 'Image not found',
                        });
                    }

                    return new Response('Offline', {
                        status: 503,
                        statusText: 'Offline',
                    });
                });
        })
    );
});