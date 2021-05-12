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
$.getJSON('https://api.ipify.org/?format=json', (data) => {
	visited(data.ip)
})
var webvium_images = document.getElementsByClassName("webvium_shot");
for (let i = 0; i < webvium_images.length; i++) {
	webvium_images[i].addEventListener("click", e => {
		create_img(webvium_images[i].src);
	});
}


function create_img(img_src) {
 var image = document.createElement("img");
 image.src = img_src;

 image.setAttribute("class", "webvium_selected_image");
 var parent = document.createElement("body");
 parent.setAttribute("class", "webvium_shot_holder");


 parent.addEventListener("click", () => {
 	document.body.removeChild(parent)
});

 parent.appendChild(image);
 document.body.appendChild(parent);
}

function openNav1() {
	document.getElementById("mrepol742_sidebar0").style.transform = 'translateX(0%)';
	var bg = document.createElement('div')
	bg.setAttribute('class', 'sidebar-bg')
	bg.setAttribute('id', 'sbg')
	document.body.appendChild(bg)
	document.getElementById('sbg').addEventListener('click', () => {
		closeNav1();
	});
}

function closeNav1() {
	document.getElementById("mrepol742_sidebar0").style.transform = 'translateX(-100%)';
  var bg = document.getElementById('sbg')
 document.body.removeChild(bg)
}

var firebaseConfig = {
    apiKey: "AIzaSyAmuYgXpDNti7SXnq_T3yNqJvVP1dJDo_8",
    authDomain: "mrepol-e2ed6.firebaseapp.com",
    projectId: "mrepol-e2ed6",
    storageBucket: "mrepol-e2ed6.appspot.com",
    messagingSenderId: "541029821490",
    appId: "1:541029821490:web:3713defdb0f0d8a939e02b",
    measurementId: "G-YYV1BV578J"
  };

  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
var c = 0;
  firebase.database().ref('visitors/').on('value', function(snapshot) {
    	 c = snapshot.val().Number
    	c++;
		document.getElementById("webvium_number_of_downloads").innerText = "Number of Downloads: " + c;
    });

	function ey() {
		firebase.database().ref('visitors').set({
  		Number: c
  	});
	}

function ex(id) {
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lf7QMUaAAAAAAdE2gqKY9ob3Q5hJ9sIRZCb-FcS', {action: 'submit'}).then(function(token) {
			  switch (id) {
				  case 0:
				   window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.20.apk";
				   ey();
				  break;
				  case 1:
				  window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.17.apk";
				  ey();
				  break;
				  case 2:
				  window.location.href = "https://mrepol742.github.io/PROJECT-WEBVIUM/Downloads/Webvium-v21.04.20.zip";
				  ey();
				  break;
			  }
          });
        });
}

let visited = (ip) => {
	firebase.database().ref('ip/').push().set({
		IP: ip
	})

}