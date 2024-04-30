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

let cacheName = 'mrepol742v6.6';

var entityMap = {
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#39;",
    "/": "&#x2F;",
    "`": "&#x60;",
    "=": "&#x3D;",
};

function escapeHtml(string) {
    return String(string).replace(/[&<>"'`=\/]/g, function (s) {
        return entityMap[s];
    });
}

if ("serviceWorker" in navigator) {
    navigator.serviceWorker
        .register("/sw.js")
        .then((reg) => {
            if (reg.installing) {
                console.log("Service worker installing");
            } else if (reg.waiting) {
                console.log("Service worker installed");
            } else if (reg.active) {
                console.log("Service worker active");
            }
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
        })
        .catch((err) => {
            console.error("Service worker failed: ", err);
        });
} else {
    console.error("Service working ain't available :(");
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

let pp = getCookie("pp1");
try {
    var bsAlert = new bootstrap.Toast(document.getElementById("privacypolicy"));

    if (pp == "") {
        bsAlert.show();
        document.getElementById("accpt").onclick = function () {
            bsAlert.hide();
            setCookie("pp1", "pp1", 7);
        };
    }
} catch (err) {}

window.addEventListener("DOMContentLoaded", () => {
    if (window.matchMedia("(display-mode: standalone)").matches) {
        document.body.style.setProperty("user-select", "none");
        document.body.style.setProperty("-webkit-user-select", "none");
        document.body.style.setProperty("-ms-user-select", "none");
        document.onkeydown = (e) => {
            if (e.key == 123 || (e.ctrlKey && e.shiftKey && e.key == "I") || (e.ctrlKey && e.shiftKey && e.key == "C") || (e.ctrlKey && e.shiftKey && e.key == "J") || (e.ctrlKey && e.key == "U")) {
                e.preventDefault();
            }
        };
        document.addEventListener("contextmenu", (e) => e.preventDefault());
        let footer = document.getElementsByTagName("footer")[0];
        footer.style.setProperty("display", "none");
    }
    el_autohide = document.querySelector(".autohide");
    if (el_autohide != null) {
        navbar_height = document.querySelector(".navbar").offsetHeight;
        document.body.style.paddingTop = navbar_height + "px";
        if (el_autohide) {
            var last_scroll_top = 0;
            window.addEventListener("scroll", function () {
                let scroll_top = window.scrollY;
                if (scroll_top == 0) {
                    el_autohide.classList.add("scrolled-up-tr");
                } else {
                    el_autohide.classList.remove("scrolled-up-tr");
                }
                if (scroll_top < last_scroll_top) {
                    el_autohide.classList.remove("scrolled-down");
                    el_autohide.classList.add("scrolled-up");
                } else {
                    el_autohide.classList.remove("scrolled-up");
                    el_autohide.classList.add("scrolled-down");
                }
                last_scroll_top = scroll_top;
            });
        }
    }
});

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const rdr = urlParams.get("rdr");

if (typeof qwermn !== "undefined") {
    if (!queryString.includes("utm_source")) {
        window.location.href = "/";
    }
}

function starsConfettie() {
    const defaults = {
        spread: 360,
        ticks: 50,
        gravity: 0,
        decay: 0.94,
        startVelocity: 30,
        shapes: ["star"],
        colors: ["FFE400", "FFBD00", "E89400", "FFCA6C", "FDFFB8"],
    };

    function shoot() {
        confetti({
            ...defaults,
            particleCount: 40,
            scalar: 1.2,
            shapes: ["star"],
        });

        confetti({
            ...defaults,
            particleCount: 10,
            scalar: 0.75,
            shapes: ["circle"],
        });
    }

    setTimeout(shoot, 0);
    setTimeout(shoot, 100);
    setTimeout(shoot, 200);
}

if (typeof ssspp !== "undefined") {
    ssspp.onclick = function () {
        const defaults = {
            spread: 360,
            ticks: 100,
            gravity: 0,
            decay: 0.94,
            startVelocity: 30,
            shapes: ["heart"],
            colors: ["FFC0CB", "FF69B4", "FF1493", "C71585"],
        };

        confetti({
            ...defaults,
            particleCount: 50,
            scalar: 2,
        });

        confetti({
            ...defaults,
            particleCount: 25,
            scalar: 3,
        });

        confetti({
            ...defaults,
            particleCount: 10,
            scalar: 4,
        });
    };

    samiunnafis.onclick = function () {
        starsConfettie();
    };

    projectwebvium.onclick = function () {
        starsConfettie();
    };
}

if (typeof sendmail !== "undefined") {
    sendmail.onclick = function () {
        var subject = document.getElementById("subject").value;
        if (subject == "") {
            document.querySelector(".status").innerHTML = "Subject cannot be empty";
            return false;
        }
        var message = document.getElementById("message").value;
        if (message == "") {
            document.querySelector(".status").innerHTML = "Message cannot be empty";
            return false;
        }
        window.location.href = escapeHtml("mailto:mrepol742@gmail.com?subject=" + subject + "&body=" + message);
    };
}

if (rdr != null) {
    window.location.href = escapeHtml(rdr + "?utm_source=" + window.location);
}

function readMore(a) {
    var dots = document.getElementById("dots" + a);
    var moreText = document.getElementById("more" + a);
    var btnText = document.getElementById("readMore" + a);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "&nbsp;See More";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "";
        moreText.style.display = "inline";
    }
}

const videos = document.querySelectorAll('video');

videos.forEach(video => {
  video.addEventListener('mouseenter', () => {
    video.play();
  });
  
  video.addEventListener('mouseleave', () => {
    video.pause();
  });
});

const originalTitle = document.title;

window.addEventListener('blur', () => {
    document.title = 'Come back please :( - ' + originalTitle;
});

window.addEventListener('focus', () => {
    document.title = originalTitle;
});