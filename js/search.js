/*
*
* Copyright (c) 2021 Melvin Jones Repol (mrepol742.github.io). All rights reserved.
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

var a = 20;

try {
if (a > Webvium.currentVersion()) {
    Webvium.showNotification("Update available", "A new version of Webvium was now available to download", "https://mrepol742.github.io/PROJECT-WEBVIUM")
}
} catch (ee) {

}

window.addEventListener('scroll', reveal)
reveal();
function reveal() {
let items = document.querySelectorAll('.obj')
for (let i = 0; i < items.length; i++) {
    let windowHeight = window.innerHeight;
    let revealTop = items[i].getBoundingClientRect().top;
    let distance = 50;

    if (revealTop < windowHeight - distance) {
        items[i].classList.add('active')
    } else {
        items[i].classList.remove('active')
    }
}
}

try {
    if (WebviumThemeHelper.isDarkModeEnabled()) {
        document.body.background = 'https://source.unsplash.com/' + WebviumThemeHelper.getQuality() + '?night'
        document.getElementById("search").style.backgroundColor = "#212121";
        document.getElementById("btn").style.backgroundColor = "#212121";
        document.getElementById("search").style.color = "#ffffff";
    } else {
        document.body.background = 'https://source.unsplash.com/' + WebviumThemeHelper.getQuality() + '?day'
    }
    b();
} catch (a) {
    document.body.background = 'https://source.unsplash.com/640x480?day'
    b();
}
document.body.backgroundSize = "cover";
document.body.backgroundPosition = "centers";

const node = document.getElementById("search");
node.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        try {
            let t = search.value;
            if (t.trim()) {
                const a = document.getElementById("search").value;
                const aq = a.toLowerCase();
                if (aq.startsWith("https://") || aq.startsWith("http://")) {
                    if (WebviumSearchHelper.isValidDomain(aq)) {
                    window.location.href = a;
                    } else {
                        window.location.href = WebviumSearchHelper.getSearchEngine() + a;
                    }
                } else {
                    if (WebviumSearchHelper.isValidDomain(aq)) {
                        window.location.href = "https://" + a;
                    } else {
                        window.location.href = WebviumSearchHelper.getSearchEngine() + a;
                    }
                }
                WebviumSearchHelper.saveQuery(a);
            }
        } catch (qw) {
            let t = search.value;
            if (t.trim()) {
                const a = document.getElementById("search").value;
                const aq = a.toLowerCase();
                if (aq.startsWith("https://") || aq.startsWith("http://")) {
                    window.location.href = a;
                } else {
                    window.location.href = "https://google.com/search?q=" + a;
                }
            }
        }
    }
});

try {
    var su = WebviumSearchHelper.query().split(":");
        if (su != "null") {
            for (let i = 0; i < su.length; i++) {
                let opt = document.createElement("option")
                opt.setAttribute("value", atob(su[i]))
                suggestions.appendChild(opt)
            }
        }
} catch (a) {
}

function b() {
    document.body.style.backgroundSize = 'cover';
    document.body.style.backgroundRepeat = 'no-repeat';
    document.body.style.backgroundAttachment = 'fixed';
    document.body.style.backgroundPosition = 'center';
}
