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

lozad().observe();
var nth = 2;
var poi = nth + 2;
var defSH = "https://source.unsplash.com/640x480?day";

try {
	if (Webvium.currentVersion() >= 28) {
        if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
			var night = WebviumHashHelper.encodeXOR("lpptw>++ivatkh306*cmplqf*mk+miecaw+safrmqi)", poi) ;
            if (WebviumThemeHelper.isDarkModeEnabled()) {
				if (Webvium.isDebug()) {
					setBg("url('" + night + "dev-bg-dark.jpg') no-repeat");
				} else {
					setBg("url('" + night + "bg-dark.jpg') no-repeat");
				}
			} else {
                if (Webvium.isDebug()) {
					setBg("url('" + night + "dev-bg-light.jpg') no-repeat");
				} else {
					setBg("url('" + night + "bg-light.jpg') no-repeat");
				}
			}
		} else {
			bgde();
		}
	} else {
		bgde();
	}
} catch (a) {
	setBg("url(' " + defSH + "') no-repeat");
}

function bgde() {
	if (WebviumThemeHelper.isBackgroundEnabled()) {
		if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
			if (WebviumThemeHelper.isDarkModeEnabled()) {
				setBg("url('" + WebviumHashHelper.encodeXOR("jvvrq8--qmwpag,wlqrncqj,amo-", nth) + WebviumThemeHelper.getQuality() + "?night') no-repeat");
			} else {
				setBg("url('" + WebviumHashHelper.encodeXOR("jvvrq8--qmwpag,wlqrncqj,amo-", nth) + WebviumThemeHelper.getQuality() + "?day') no-repeat");
			}
		} else {
			setBg("transparent")
		}
	} else {
		setBg("transparent")
	}
}

function setBg(a) {
	document.body.style.background = a;
	document.body.style.backgroundSize = "cover";
}

const node = document.getElementById("search");
node.addEventListener("keyup", function (event) {
	if (event.key === "Enter") {
		find(search.value)
	}
});

/*
 * Roses are red
 * Violets are blue
 * If you are reading this
 * You are an idiot too
*/


try {
    var su = WebviumSearchHelper.query().split(":");
    if (su != "null") {
        for (let i = 0; i < su.length; i++) {
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

search.addEventListener('input', () => {
	try {
		if (WebviumSearchSuggestion.isSearchSuggestionsEnabled()) {
			var inp = search.value
			if (inp.trim().length != 0) {
				let divs = document.querySelectorAll('.sug-item')

				for (let i = 0; i < divs.length; i++) {
					sug.removeChild(divs[i])
				}

				sug.style.display = 'flex'
				var doc = WebviumSearchSuggestion.getResponse(search.value)
				var jsonString = xml2json($.parseXML(doc)).split('undefined').join('')
				var json = JSON.parse(jsonString)
				var topLevel = json.toplevel
				var comsug = topLevel.CompleteSuggestion
				var data = ""

				for (let i = 0; i < comsug.length; i++) {
					data += comsug[i].suggestion.data + "<br>"
					let sugItem = document.createElement('div')
					sugItem.setAttribute('class', 'sug-item')

					let icon = document.createElement('span')
					icon.setAttribute('class', 'material-icons')
					icon.textContent = 'search'

					let text = document.createElement('span')
					text.setAttribute('class', 'text')
					text.textContent = comsug[i].suggestion.data

					sugItem.appendChild(icon)
					sugItem.appendChild(text)
					sug.appendChild(sugItem)
					sugItem.addEventListener('click', () => {
						search.value = comsug[i].suggestion.data
						sug.style.display = 'none'
						find(comsug[i].suggestion.data)
					})
				}
			} else {
				sug.style.display = 'none'
				sug.innerHTML = ''
			}
		}
	} catch (ex) { }
})

function find(query) {
	try {
		let t = query;
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

// if java side fails all the code here is a trash.