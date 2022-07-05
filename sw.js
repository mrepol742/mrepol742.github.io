const PRECACHE2 = 'precache-v9';
const RUNTIME = 'runtime-v9';

self.addEventListener('install', event => {
    event.waitUntil(caches.open(PRECACHE2).then(cache => cache.addAll(["/"])).then(self.skipWaiting())
    );
});

self.addEventListener('activate', event => {
    const currentCaches = [PRECACHE2,RUNTIME];
    event.waitUntil(caches.keys().then(cacheNames => {
        return cacheNames.filter(cacheName => !currentCaches.includes(cacheName));
    }).then(cachesToDelete => {
            return Promise.all(cachesToDelete.map(cacheToDelete => {
                return caches.delete(cacheToDelete);
            }
        ));
    }).then(() => self.clients.claim()));
});

self.addEventListener('fetch', event => {
    let url = event.request.url;
    if (url.startsWith(self.location.origin) && !url.endsWith(".mp4") && (url.startsWith("https://mrepol742.github.io") || url.startsWith("https://cdn.jsdelivr.net"))) {
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
