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

window.addEventListener('scroll', reveal);
reveal();
function reveal() {
  let items = document.querySelectorAll('.obj');
  for (let i = 0; i < items.length; i++) {
    let windowHeight = window.innerHeight;
    let revealTop = items[i].getBoundingClientRect().top;
    let distance = 30;

    if (revealTop < windowHeight - distance) {
      items[i].classList.add('active');
    } else {
      items[i].classList.remove('active');
    }
  }
}

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
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

let pp = getCookie("pp");
  if (pp == "") {
    var x = document.querySelectorAll("#tst");
    x[0].style.setProperty("display", "block", "important");
  }

document.getElementById("accpt").onclick = function() {
  setCookie("pp", "pp", 365);
  var x = document.querySelectorAll("#tst");
  x[0].style.setProperty("display", "none", "important");
}
