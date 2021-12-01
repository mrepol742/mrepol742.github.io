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

lozad().observe();
var a = 25;

try {
    if (a > Webvium.currentVersion()) {
		let qw = ac("qwewqe34");
		if (qw == "" || qw == null) {
		  Webvium.showNotification("Update available", "A new version of Webvium is now available to download", "https://mrepol742.github.io/PROJECT-WEBVIUM")
		  ab("oyujt", "f3f4fas", 1);
		}
     
    }

} catch (ee) {

}



let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`)
document.documentElement.style.setProperty('--sug', `${vh}px`)

try {
	if (WebviumThemeHelper.isBackgroundEnabled()) {
    if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
        if (WebviumThemeHelper.isDarkModeEnabled()) {
            bg.src = 'https://source.unsplash.com/' + WebviumThemeHelper.getQuality() + '?night';
			document.getElementById("webvium").style.color ="#ffffff";
        } else {
			document.getElementById("webvium").style.color ="#212121";
            bg.src = 'https://source.unsplash.com/' + WebviumThemeHelper.getQuality() + '?day';
        }
    } else {
        bg.style.display = 'none';
        document.getElementsByTagName("body")[0].style.backgroundColor = "rgba(255, 255, 255, 0)";
    }
}
} catch (a) {
    bg.src = 'https://source.unsplash.com/640x480?day';
}


document.getElementById("search").style.background = "linear-gradient(" + Math.floor(Math.random() * 91) + 20 +"deg, rgb(95, 44, 130), rgb(73, 160, 157))";

const node = document.getElementById("search");
node.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
	    find(search.value)
    }
});

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

/*
 * Roses are red
 * Violets are blue
 * If you are reading this
 * You are an idiot too
*/

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
	} catch (ex) {}
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

function ab(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	let expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function ac(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for(let i = 0; i <ca.length; i++) {
	  let c = ca[i];
	  while (c.charAt(0) == ' ') {
		c = c.substring(1);
	  }
	  if (c.indexOf(name) == 0) {
		return c.substring(name.length, c.length);
	  }
	}
	return "";
  }

  function qwer() {
	let qw = ac("qw1212");

	  if (qw == "" || qw == null) {
		  Webvium.showNotification("Webvium", "A new version of this app will be available soon bringing security, compatibility, performance, UI and reliability improvements, bug fixes and new features.", "https://webvium.github.io")
		ab("qw1212", "1234", 7);
	  }
  }
try {
  qwer();
} catch (aasas){}