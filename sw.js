const PRECACHE2 = 'precache-v2';
const RUNTIME = 'runtime-v2';
const PRECACHE_URLS = [
    '/'   
];
self.addEventListener('install', event => {
    event.waitUntil(caches.open(PRECACHE2)
        .then(cache => cache.addAll("/"))
        .then(self.skipWaiting())
    );
});
self.addEventListener('activate', event => {
    const currentCaches = [
        PRECACHE2,
        RUNTIME
    ];
    event.waitUntil(caches.keys().then(cacheNames => {
        return cacheNames.filter(cacheName => !currentCaches.includes(cacheName));
    })
        .then(cachesToDelete => {
            return Promise.all(cachesToDelete.map(cacheToDelete => {
                return caches.delete(cacheToDelete);
            }
            ));
        })
        .then(() => self.clients.claim()));
});
self.addEventListener('fetch', event => {
    if (event.request.url.startsWith(self.location.origin)) {
        event.respondWith(caches.match(event.request)
            .then(cachedResponse => {
                if (cachedResponse) {
                    return cachedResponse;
                }
                return caches.open(RUNTIME)
                    .then(cache => {
                        return fetch(event.request)
                            .then(response => {
                                return cache.put(event.request, response.clone())
                                    .then(() => {
                                        return response;
                                    });
                            });
                    });
            }));
    }
});
