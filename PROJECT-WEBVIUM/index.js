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
  document.getElementById("mrepol742_sidebar0").style.width = "250px";
}

function closeNav1() {
  document.getElementById("mrepol742_sidebar0").style.width = "0";
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

  firebase.database().ref('visitors/').on('value', function(snapshot) {
    	var c = snapshot.val().Number
    	c++;
		document.getElementById("webvium_number_of_downloads").innerText = "Number of Downloads: " + c;
    });

function ex(link) {
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lf7QMUaAAAAAAdE2gqKY9ob3Q5hJ9sIRZCb-FcS', {action: 'submit'}).then(function(token) {
             window.location.href = link;
          });
        });
}
