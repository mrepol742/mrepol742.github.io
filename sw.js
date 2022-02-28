/*
*
* Copyright (c) 2022 Melvin Jones Repol (mrepol742.github.io). All rights reserved.
*
* License under the GNU General Public License, Version 3.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*     https://www.gnu.org/licenses/gpl-3.0.en.html
*
* Unless required by the applicable law or agreed in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/

const PRECACHE2 = 'precache-v2';
const RUNTIME = 'runtime-v2';
const PRECACHE_URLS = [
    '/'   
];
self.addEventListener('install', event => {
    event.waitUntil(caches.open(PRECACHE2)
        .then(cache => cache.addAll(PRECACHE_URLS))
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
