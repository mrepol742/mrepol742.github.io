/*
 *
 * Copyright (c) 2023 Melvin Jones Repol (mrepol742.github.io). All Rights Reserved.
 *
 * License under the GNU GENERAL PUBLIC LICENSE, version 3.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://github.com/mrepol742/mrepol742.github.io/blob/master/LICENSE
 *
 * Unless required by the applicable law or agreed in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

const cacheName = 'mrepol742v6.4';

self.addEventListener('activate', event => {
  event.waitUntil(
    (async () => {
      const keys = await caches.keys();
      return keys.map(async (cache) => {
        if(cache !== cacheName) {
          console.log('Service Worker: Removing old cache: '+ cache);
          return await caches.delete(cache);
        }
      })
    })()
  )
})

self.addEventListener('install', (event) => {
  event.waitUntil(caches.open(cacheName));
});

self.addEventListener('fetch', async (event) => {
  if (event.request.method !== "GET") return;
  if (((event.request.destination === 'image' || event.request.url.includes("/lib/") || event.request.url.includes("/vendor/") || event.request.url.includes("/fonts/")) && event.request.url.includes(atob("aHR0cHM6Ly9tcmVwb2w3NDIuZ2l0aHViLmlv")))) {
    event.respondWith(caches.open(cacheName).then((cache) => {
      return cache.match(event.request).then((cachedResponse) => {
        return cachedResponse || fetch(event.request.url).then((fetchedResponse) => {
          cache.put(event.request, fetchedResponse.clone());
          return fetchedResponse;
        });
      });
    }));
  }
  return;
});