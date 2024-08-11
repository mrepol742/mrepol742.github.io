/*
 *
 * Copyright (c) 2023 Melvin Jones Gallano Repol (mrepol742.github.io). All Rights Reserved.
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

let cacheNameSW = 'mrepol742v7';

const cacheable = /^https:\/\/mrepol742.github.io(\/lib\/|\/fonts\/|\/images\/|\/vendor\/components\/)/;
const cacheableD = /^http:\/\/0.0.0.0:8000(\/lib\/|\/fonts\/|\/images\/|\/vendor\/components\/)/;
let debug = false;

self.addEventListener('install', (event) => {
  event.waitUntil(caches.open(cacheNameSW));
});

self.addEventListener('fetch', async (event) => {
  if (event.request.method !== "GET") {
    if (debug) console.log("cache_fetch " + event.request.method);
    return;
  }
  if (a().test(event.request.url)) {
    event.respondWith(caches.open(cacheNameSW).then((cache) => {
      return cache.match(event.request).then((cachedResponse) => {
        if (debug) console.log("cache_response " + JSON.stringify(cachedResponse));
        return cachedResponse || fetch(event.request.url).then((fetchedResponse) => {
          if (debug) console.log("cache_put " + event.request.url);
          cache.put(event.request, fetchedResponse.clone());
          return fetchedResponse;
        });
      });
    }));
  }
  return;
});

function a() {
  if (debug) return cacheableD;
  return cacheable;
}