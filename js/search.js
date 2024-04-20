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

try {
	var v = 28;
	var vc = getCookie("vr");
    if (vc == "" && v > Webvium.currentVersion()) {
		Webvium.showNotification("You are using an outdated version of Webvium.", "Tap here to update or go to https://mrepol742.github.io/webvium", "https://mrepol742.github.io/webvium");
		setCookie("vr", v, 1);
	}
} catch (wer) {
	 
}

var defSH = "https://source.unsplash.com/";

try {
	if (Webvium.currentVersion() > 28) {
		var bgn = WebviumThemeHelper.getBackgroundStatus();
		if (bgn == "60z") {
			bgde();
		} else if (bgn == "30z") {
			if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
				if (WebviumThemeHelper.isDarkModeEnabled()) {
					setColor("#000");
				} else {
					setColor("#fff");
				}
			} else {
				trans();
			}
		} else if (bgn == "7z") {
			trans();
		} else {
			if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
				var night = "https://mrepol742.github.io/images/webvium-";
				if (WebviumThemeHelper.isDarkModeEnabled()) {
					//if (Webvium.isDev()) {
					//	setBg(night + "dev-bg-dark.jpg");
					//} else {
				        setBg(night + "bg-dark.jpg");
					//}
				} else {
					//if (Webvium.isDev()) {
					//	setBg(night + "dev-bg-light.jpg");
					//} else {
					    setBg(night + "bg-light.jpg");
					//}
				}
			} else {
				trans();
			}
		}
	} else {
		bgde();
	}
} catch (a) {
	const mediaQuery = window.matchMedia('(max-width: 1080px)')
if (!mediaQuery.matches) {
	setBg(defSH + "1920x1080?day");
} else {
	setBg(defSH + "640x480?day");
}
}

function bgde() {
	if (!WebviumThemeHelper.isCustomBackgroundEnabled()) {
		if (WebviumThemeHelper.isDarkModeEnabled()) {
			setBg(defSH + getFixedSize() + "?night");
		} else {
			setBg(defSH + getFixedSize() + "?day");
		}
	} else {
		trans();
	}
}

function getFixedSize() {
	var currentSize = WebviumThemeHelper.getQuality();
	const mediaQuery = window.matchMedia('(max-width: 1080px)')
if (!mediaQuery.matches) {
	if (currentSize == "1280x720") {
		return "720x1280";
	}
	return "480x640"
} else {
	return currentSize;
}
}


function setBg(a) {
	document.body.style.background = "url('" + a + "') no-repeat fixed center";
	document.body.style.backgroundSize = "cover";
}

function trans() {
	document.body.style.background = "transparent";
}

function setColor(a) {
	document.body.style.backgroundColor = a;
}

search.addEventListener("keyup", function (event) {
	if (event.key === "Enter") {
		find(search.value);
	}
});

search1.addEventListener("keyup", function (event) {
	if (event.key === "Enter") {
		find(search1.value);
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
		for (var i = 0; i < su.length; i++) {
			var sugItem = document.createElement('div');
			sugItem.setAttribute('class', 'sug-item');

			var icon = document.createElement('span');
			//icon.setAttribute('class', 'fa fa-search');

			var text = document.createElement('span');
			text.setAttribute('class', 'text');
			text.textContent = atob(su[i]);

			sugItem.appendChild(icon);
			sugItem.appendChild(text);
			sug.appendChild(sugItem);

			search.addEventListener('input', () => {
				if (search.value.length != 0) {
					sug.style.display = 'flex';
					if (text.textContent.includes(search.value)) {
						sugItem.style.display = 'flex';
						sug.style.display = 'flex';
					} else {
						sugItem.style.display = 'none';
					}
					sugItem.addEventListener('click', () => {
						search.value = atob(su[i]);
					});
				} else {
					sug.style.display = 'none';
					search.style.transform = 'translateY(0%)';
					webvium.style.transform = 'translateY(0%)';
					sug.style.transform = 'tranlate(-50%, 0%)';
				}
			});
		}
	} 
} catch (a) { }

but.addEventListener('click', () => {
	find(search.value);
});

but1.addEventListener('click', () => {
	find(search.value);
});

search.addEventListener('input', () => {
	try {
		if (WebviumSearchSuggestion.isSearchSuggestionsEnabled()) {
			var inp = search.value;
			if (inp.trim().length != 0) {
				var divs = document.querySelectorAll('.sug-item');

				for (var i = 0; i < divs.length; i++) {
					sug.removeChild(divs[i]);
				}

				sug.style.display = 'flex';
				var doc = WebviumSearchSuggestion.getResponse(search.value);
				var jsonString = xml2json($.parseXML(doc)).split('undefined').join('');
				var json = JSON.parse(jsonString);
				var topLevel = json.toplevel;
				var comsug = topLevel.CompleteSuggestion;
				var data = "";

				for (var i = 0; i < comsug.length; i++) {
					data += comsug[i].suggestion.data + "<br>";
					var sugItem = document.createElement('div');
					sugItem.setAttribute('class', 'sug-item');

					
					var icon = document.createElement('span');
					icon.textContent = '';

					var text = document.createElement('span');
					text.setAttribute('class', 'text');
					text.textContent = comsug[i].suggestion.data;

					sugItem.appendChild(icon);
					sugItem.appendChild(text);
					sug.appendChild(sugItem);
					
					sugItem.addEventListener('click', () => {
						search.value = comsug[i].suggestion.data;
						find(comsug[i].suggestion.data);
					});
				}
			} else {
				sug.style.display = 'none';
				sug.innerHTML = '';
			}
		}
	} catch (ex) { }
});

function find(query) {
	query = decodeURI(query);
	document.body.style.background = "#fff";
	sug.style.display = 'none';
	page1.style.display = 'none';
	page2.style.display = 'block';
	search1.value = query;
	try {
		if (query.trim().length != 0) {
			const aq = query.toLowerCase();
			if (aq.startsWith("https://") || aq.startsWith("http://")) {
				if (WebviumSearchHelper.isValidDomain(aq)) {
					window.location.href = escapeHtml(query);
				} else {
					window.location.href = WebviumSearchHelper.getSearchEngine() + query;
				}
			} else {
				if (WebviumSearchHelper.isValidDomain(aq)) {
					window.location.href = escapeHtml("https://" +query);
				} else {
					window.location.href = WebviumSearchHelper.getSearchEngine() + query;
				
				}
			}
			WebviumSearchHelper.saveQuery(query);
		}
	} catch (qw) {
		if (query.trim() !== 'undefined' || query.trim().length != 0) {
			const aq = query.toLowerCase();
			if (aq.startsWith("https://") || aq.startsWith("http://")) {
				window.location.href = escapeHtml(query);
			} else {
				window.location.href = atob("aHR0cHM6Ly9nb29nbGUuY29tL3NlYXJjaD9xPQ==") + query;
			}
		}
	}
}

var sq = decodeURIComponent(location.search.split('query=')[1] ? location.search.split('query=')[1] : '');
if (sq != '') {
	document.getElementById("search").value = sq;
	find(sq);
} else {
var sq1 = decodeURIComponent(location.search.split('q=')[1] ? location.search.split('q=')[1] : '');
if (sq1 != '') {
	document.getElementById("search").value = sq1;
	find(sq1);
}
}

var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

updateTime();
setInterval(function() {
	updateTime();
}, 60000)

function s222(q) {
	$(document).ready(function() {
		$('title').text(q + " | Webvium Search");
		window.history.replaceState(null, null, "?query=" + q);
	})
	$.ajax({
        url: "https://search.mrepol742.repl.co?" + q,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        type: "GET",
        success: function (result) {
			
			s223(q);
			var root = document.getElementById('root');
			var card = document.createElement('div');
			card.setAttribute('class', 'card cards');
			var divimg = document.createElement('div');
			divimg.setAttribute('class', 'images');
			var h3 = document.createElement('h3');
			h3.setAttribute('class', 'igtt');
			h3.innerText = "Images for " + q + " ›";
			card.appendChild(h3);
			var divimgh = document.createElement('div');
			divimgh.setAttribute('class', 'holder');
			divimgh.setAttribute('id', 'root1');
			divimg.appendChild(divimgh);
			card.appendChild(divimg);
			var i;
			for (i = 0; i < result.length; i++) {
                if (i == 4) {
					var h3 = document.createElement('h3');
			        h3.innerText = "Images for " + q + " ›";
			        h3.setAttribute('class', 'igtt')
			        card.appendChild(h3);
					var divimg = document.createElement('div');
			        divimg.setAttribute('class', 'images');
			        var divimgh = document.createElement('div');
			        divimgh.setAttribute('class', 'holder');
			        divimgh.setAttribute('id', 'root2');
			        divimg.appendChild(divimgh);
			        card.appendChild(divimg);
				}
                var body = document.createElement('div');
				body.setAttribute('class', 'card-body');
				body.setAttribute('onclick', '$(\'#url' + i + '\')[0].click();')
				body.setAttribute('id', 'cardbbb');
				body.setAttribute('style', 'text-align: left !important;')

                var title = document.createElement('div');
				title.setAttribute('class', 'row card-title');

				var div = document.createElement('div');
				div.setAttribute('class', 'col-md-1');
				var img = document.createElement('img');
				img.setAttribute('class', 'fav');
				img.setAttribute('src', result[i].favicons.high_res);
				img.setAttribute('loading', 'lazy');
				img.setAttribute('onerror', "this.onerror=null; this.style='display: none;'");
				div.appendChild(img);

				var title1 = document.createElement('h5');
				title1.innerText = result[i].title;
				var div1 = document.createElement('div');
				div1.setAttribute('class', 'col-md-9');
			//	div1.setAttribute('style', 'margin-left: -40px !important');
				div1.appendChild(title1);


				title.appendChild(div);
				title.appendChild(div1);
			    body.appendChild(title);

				var text = document.createElement('p');
				text.setAttribute('class', 'card-text');
				text.innerText = result[i].description;
				var br = document.createElement('br');
				text.appendChild(br);
				var url = document.createElement('a');
				url.setAttribute('href', result[i].url);
				url.setAttribute('id', "url" + i);
				url.setAttribute('class', 'a-href-s');
				url.innerText = result[i].url;
				text.appendChild(url);
				body.appendChild(text);
				card.appendChild(body);
			}
			$('#root').empty();
			root.appendChild(card);
        },
        error: function (result) {
            console.log(result);
        }
    });
}

function s223(q) {
	$.ajax({
        url: "https://search.mrepol742.repl.co/img?" + q,
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        type: "GET",
        success: function (result) {
			var root = document.getElementById('root1');
			var second = document.getElementById('root2');
			for (i = 0; i < 40 && i < result.length;  i++) {
				var img = document.createElement('img');
				img.setAttribute('class', 'preview');
				img.setAttribute('loading', 'lazy');
				img.setAttribute('src', result[i].url);
				img.setAttribute('onerror', "this.onerror=null; this.style='display: none;'");
				//img.setAttribute('alt', result[i].origin.title);
				if (i % 2 === 0) {
					root.appendChild(img);
				} else {
					second.appendChild(img);
				}
			}
		},
        error: function (result) {
            console.log(result);
        }
    });
}

function updateTime() {
	var date = new Date();
    currD.innerHTML = "<h1>" + days[date.getDay()] + ", " + months[date.getMonth()] + " " + date.getDate() + "</h1>";
}
