var isSearch = true;

try {
	var v = 28;
	let vc = getCookie("vr");
    if (vc == "" && v > Webvium.currentVersion()) {
		Webvium.showNotification("You are using an outdated version of Webvium.", "Tap here to update or go to https://webvium.github.io", "https://webvium.github.io");
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
	let currentSize = WebviumThemeHelper.getQuality();
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

const node = document.getElementById("search");

node.addEventListener("keyup", function (event) {
	if (event.key === "Enter") {
		find(search.value);
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
			let sugItem = document.createElement('div');
			sugItem.setAttribute('class', 'sug-item');

			let icon = document.createElement('span');
			//icon.setAttribute('class', 'fa fa-search');

			let text = document.createElement('span');
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

let but = document.getElementById("but");
but.addEventListener('click', () => {
	find(search.value);
});

node.addEventListener('input', () => {
	try {
		if (WebviumSearchSuggestion.isSearchSuggestionsEnabled()) {
			var inp = search.value;
			if (inp.trim().length != 0) {
				let divs = document.querySelectorAll('.sug-item');

				for (let i = 0; i < divs.length; i++) {
					sug.removeChild(divs[i]);
				}

				sug.style.display = 'flex';
				var doc = WebviumSearchSuggestion.getResponse(search.value);
				var jsonString = xml2json($.parseXML(doc)).split('undefined').join('');
				var json = JSON.parse(jsonString);
				var topLevel = json.toplevel;
				var comsug = topLevel.CompleteSuggestion;
				var data = "";

				for (let i = 0; i < comsug.length; i++) {
					data += comsug[i].suggestion.data + "<br>";
					let sugItem = document.createElement('div');
					sugItem.setAttribute('class', 'sug-item');

					
					let icon = document.createElement('span');
					icon.textContent = '';

					let text = document.createElement('span');
					text.setAttribute('class', 'text');
					text.textContent = comsug[i].suggestion.data;

					sugItem.appendChild(icon);
					sugItem.appendChild(text);
					sug.appendChild(sugItem);
					
					sugItem.addEventListener('click', () => {
						search.value = comsug[i].suggestion.data;
						sug.style.display = 'none';
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
	try {
		if (query.trim().length != 0) {
			const aq = query.toLowerCase();
			if (aq.startsWith("https://") || aq.startsWith("http://")) {
				if (WebviumSearchHelper.isValidDomain(aq)) {
					window.location.href = query;
				} else {
					window.location.href = WebviumSearchHelper.getSearchEngine() + query;
				}
			} else {
				if (WebviumSearchHelper.isValidDomain(aq)) {
					window.location.href = "https://" + query;
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
				window.location.href = query;
			} else {
				window.location.href = atob("aHR0cHM6Ly9nb29nbGUuY29tL3NlYXJjaD9xPQ==") + query;
			}
		}
	}
}

var sq = location.search.split('q=')[1] ? location.search.split('q=')[1] : '';
var re = location.search.split('r=')[1] ? location.search.split('r=')[1] : false;
if (sq != '') {
	document.getElementById("search").value = sq;
	if (re) {
		find(sq);
	}
}

window.history.replaceState(null, null, window.location.pathname);

let time = document.getElementById("time");
let qoute = document.getElementById("qoute");
let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
let months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

updateTime();
setInterval(function() {
	updateTime();
}, 60000)

updateQoute();

setInterval(function() {
    updateQoute();
}, 300000)

function updateQoute() {
	$.ajax({
		method: 'GET',
		url: 'https://api.quotable.io/random',
		contentType: 'application/json',
		success: function(result) {
			qoute.innerHTML = "<blockquote>" + result.content + "</blockquote> - " + result.author;
		},
		error: function ajaxError(jqXHR) {
			console.error('Error: ', jqXHR.responseText);
		}
	});
}

function updateTime() {
	let date = new Date();
    time.innerHTML = "<h2>Today is <b>" + days[date.getDay()] + "</b>, " + months[date.getMonth()] + " " + date.getDate() + "</h2>";
	time.innerHTML += "<h4>" + date.getHours() + ":" + date.getMinutes(); + "</h4>";
}

var mrepol742 = "                                               \n" +
"                                    \"\"#    mmmmmm    mm   mmmm \n" +
" mmmmm   m mm   mmm   mmmm    mmm     #        #\"   m\"#  \"   \"# \n" +
" # # #   #\"  \" #\"  #  #\" \"#  #\" \"#    #       m\"   #\" #      m\" \n" +
" # # #   #     #\"\"\"\"  #   #  #   #    #      m\"   #mmm#m   m\"   \n" +
" # # #   #     \"#mm\"  ##m#\"  \"#m#\"    \"mm   m\"        #  m#mmmm \n" +
"                      #                                         \n" +
                      "                                          \n" +
"                      ";

console.log(mrepol742, '\nHello World,\n\nCool to see you here!\nWe hope you find what you are looking for.\nFeel free to ask us any questions:\nhttps://facebook.com/melvinjonesrepol\n\nHave a bugless day!\n\n');