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

try {
	if (WebviumThemeHelper.isBackgroundEnabled()) {
    if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
        if (WebviumThemeHelper.isDarkModeEnabled()) {
            document.body.style.background = "url('https://source.unsplash.com/" + WebviumThemeHelper.getQuality() + "?night')";
            document.getElementById("webvium").style.color = "#ffffff";
        } else {
            document.body.style.background = "url('https://source.unsplash.com/" + WebviumThemeHelper.getQuality() + "?day')";
            document.getElementById("webvium").style.color = "#484848";
        }
    } else {
        document.body.style.background = "transparent";
    }
}
} catch (a) {
    document.body.style.background = "url('https://source.unsplash.com/640x480?day')";
}

const node = document.getElementById("search");
node.addEventListener("keyup", function(event) {
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