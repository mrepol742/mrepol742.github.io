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

const PRECACHE2 = 'precache-v4';
const RUNTIME = 'runtime-v4';
const PRECACHE_URLS = [
    "/index.html",
    "/webvium/index.html",
    "/webviumvpn/index.html",
    "/webvium/privacypolicy/index.html",
    "/webviumvpn/privacypolicy/index.html",
    "/webvium/team/index.html",
    "/viewip/index.html",
    "/useragent/index.html",
    "/search/index.html",
    "/search/favicon.png",
    "/press/index.html",
    "/ily/index.html",
    "/how-to-install/index.html",
    "/flowers/index.html",
    "/download/index.html",
    "/adstest/index.html",
    "/privacypolicy/index.html",
    "/humans.txt",
    "/site.webmanifest",
    "/404.html",
    "/fonts/Maven-Pro.ttf",

    "/js/ads.js",
    "/js/download.js",
    "/js/flowers.js",
    "/js/ily.js",
    "/js/mrepol742.js",
    "/js/mrepol742v2.js",
    "/js/newyear.js",
    "/js/search.js",
    "/js/webvium.js",
    "/js/webviumvpn.js",

    "/css/flowers.css",
    "/css/ily.css",
    "/css/mrepol742.css",
    "/css/search.css",

    "/lib/bootstrap.bundle.min.js",
    "/lib/bootstrap.bundle.min.js.map",
    "/lib/bootstrap.min.css",
    "/lib/bootstrap.min.css.map",
    "/lib/console.css",
    "/lib/console.js",
    "/lib/lozad.min.js",
    "/lib/jquery.min.js",
    "/lib/typed.js",
    "/lib/xml2json.js",

    "/favicon.ico",
    "/favicon.png",

    "/images/acer.png",
    "/images/alexa-guno.jpg",
    "/images/amos.jpg",
    "/images/androidstudio.jpg",
    "/images/available_at_amazon_en_horizontal.png",
    "/images/badge.svg",
    "/images/badge1.svg",
    "/images/badge2.svg",
    "/images/badge3.svg",
    "/images/badge4.svg",
    "/images/badge5.svg",
    "/images/badge6.svg",
    "/images/canva.png",
    "/images/code.png",
    "/images/elisha.jpg",
    "/images/GalaxyStore_English.png",
    "/images/johnoye742.jpeg",
    "/images/kelly.jpg",
    "/images/kingsly.png",
    "/images/mile03.jpeg",
    "/images/mrepol742-page-land-logo.png",
    "/images/mrepol742.jpg",
    "/images/mrepol742.png",
    "/images/mrepol7422.jpg",
    "/images/mrepol7423.jpg",
    "/images/mrepol7424.jpg",
    "/images/mrepol7425.jpg",
    "/images/Octocat.png",
    "/images/pat.jpg",
    "/images/SamiunNafis.png",
    "/images/samsung.jpg",
    "/images/simpleanalytics.jpg",
    "/images/uptodown.jpg",
    "/images/visualstudio.jpg",
    "/images/webvium_transparent_icon.png",
    "/images/webvium-bg-dark.jpg",
    "/images/webvium-bg-light.jpg",
    "/images/webvium-how-to-install-1.jpg",
    "/images/webvium-how-to-install-3.jpg",
    "/images/webvium-how-to-install-4.jpg",
    "/images/webvium-how-to-install-6.jpg",
    "/images/webvium-how-to-install-8.jpg",
    "/images/webvium-how-to-install-9.jpg",
    "/images/webvium-icon.png",
    "/images/webvium-vpn-main-dark-connected.jpg",
    "/images/webvium-vpn-main-dark.jpg",
    "/images/webvium-vpn-main-light-connected.jpg",
    "/images/webvium-vpn-main-light.jpg",
    "/images/webvium0.jpg",
    "/images/webvium1.jpg",
    "/images/webvium2.5.jpg",
    "/images/webvium2.jpg",
    "/images/webvium4.jpg",
    "/images/webvium5.jpg",
    "/images/webvium6.jpg",
    "/images/webvium7.jpg",
    "/images/webvium22.jpg",
    "/images/webviumvpn_transparent_icon.png",
    "/images/webviumvpn.jpg"


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
                                console.log(event.request);
                                return cache.put(event.request, response.clone())
                                    .then(() => {
                                        return response;
                                    });
                            });
                    });
            }));
    }
});
