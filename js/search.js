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
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`)

try {
    if (a > Webvium.currentVersion()) {
        Webvium.showNotification("Update available", "A new version of Webvium was now available to download", "https://mrepol742.github.io/PROJECT-WEBVIUM")
    }
} catch (ee) {}

window.addEventListener('scroll', reveal)
reveal();
lozad().observe();
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
    if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
        if (WebviumThemeHelper.isDarkModeEnabled()) {
            bg.style.display = 'block'
            bg.src = 'https://source.unsplash.com/' + WebviumThemeHelper.getQuality() + '?night'
            document.getElementById("search").style.backgroundColor = "#212121";
            document.getElementById("btn").style.backgroundColor = "#212121";
            document.getElementById("search").style.color = "#ffffff";
            document.querySelector('.webvium').style.color = '#fcfcfc'
        } else {
            bg.src = 'https://source.unsplash.com/' + WebviumThemeHelper.getQuality() + '?day'
        }
    } else {
        bg.style.display = 'none'
    }
} catch (a) {
    bg.src = 'https://source.unsplash.com/640x480?day'
    if (!a.toString().includes('Webvium')) {
        console.error(a)
    }
}

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
    alert(su)
    if (su != "null") {
        for (let i = 0; i < su.length; i++) {
            let opt = document.createElement("option")
            opt.setAttribute("value", atob(su[i]))
            suggestions.appendChild(opt)
            let sugItem = document.createElement('div')
            sugItem.setAttribute('class', 'sug-item')

            let icon = document.createElement('span')
            icon.setAttribute('class', 'material-icons')
            icon.textContent = 'history'

            let text = document.createElement('span')
            text.setAttribute('class', 'text')
            text.textContent = atob(su[i])

            sugItem.appendChild(icon)
            sugItem.appendChild(text)
            sug.appendChild(sugItem)

            search.addEventListener('input', () => {
                if (search.value.length != 0) {
                    sug.style.display = 'flex'
                    if (text.textContent.includes(search.value)) {
                        sugItem.style.display = 'flex'
                        sug.style.display = 'flex'
                    } else {
                        sugItem.style.display = 'none'
                    }

                    sugItem.addEventListener('click', () => {
                        search.value = atob(su[i])
                    })
                } else {
                    sug.style.display = 'none'
                    search.style.transform = 'translateY(0%)'
                    webvium.style.transform = 'translateY(0%)'
                    sug.style.transform = 'tranlate(-50%, 0%)'
                }
            })
        }
    }
} catch (a) {}

//Unused function
function b() {
    document.body.style.backgroundSize = 'cover';
    document.body.style.backgroundRepeat = 'no-repeat';
    document.body.style.backgroundAttachment = 'fixed';
    document.body.style.backgroundPosition = 'center';
}