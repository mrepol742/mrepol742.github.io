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
        })
        .catch((err) => {
            console.error("Service worker failed: ", err);
        });
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

let pp = getCookie("pp");
try {
    var bsAlert = new bootstrap.Toast(document.getElementById("privacypolicy"));

    if (pp == "") {
        bsAlert.show();
        document.getElementById("accpt").onclick = function () {
            bsAlert.hide();
            setCookie("pp", "pp", 365);
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

window.onerror = function a(msm, url, num) {
    alert(msm + "\n\n" + url);
    return false;
}

const queryString = window.location.search
const urlParams = new URLSearchParams(queryString);
const rdr = urlParams.get('rdr')

if (typeof qwermn !== "undefined") {
if (!queryString.includes("utm_source")) {
    window.location.href = "/";
}
} 

if (rdr != null) {
    window.location.href = rdr + "?utm_source=" + btoa(window.location);
}

function readMore(a) {
    var dots = document.getElementById("dots" + a);
    var moreText = document.getElementById("more" + a);
    var btnText = document.getElementById("readMore" + a);
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }