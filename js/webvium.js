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

//var ins = true;
var a = 27;
var fo = "2.7";
var upda = "Jan 13, 2022";
var ul = "https://github.com/mrepol742/released/blob/stable/Webvium%20v";
var ab = ".apk?raw=true";
var vr = ["1.0", "1.1", "1.2", "1.3", "1.4", "1.5", "1.6", "1.7", "1.8", "1.9", "2.0", "2.1", "2.2", "2.3", "2.4", "2.5", "2.6"];

let items = document.querySelectorAll('.size12');
items.forEach((e) => {
    e.innerHTML = "450KB";
});
let items3 = document.querySelectorAll('.version');
items3.forEach((e3) => {
    e3.innerHTML = fo;
});

document.getElementById("upda").innerHTML = upda;

let i2 = 4;
let interval;

function download() {
    if (!interval) {
        interval = setInterval(ct, 1500);
    }
}

function ct() {
    if (i2 <= 0) {
        document.getElementById("download_btn").innerHTML = "Downloading Now";
        resetTimer();
       /* if (ins) {
           window.location.href = "https://webvium-download-counter.vercel.app/api?count=0&ref=" + ul + fo + ab;
           ins = false;
        } else {*/
           window.location.href = ul + fo + ab;
      //  }
    } else {
        i2--;
        document.getElementById("download_btn").innerHTML = "Downloading in " + i2 + " secs";
    }
}
/*
var r = new XMLHttpRequest();
    r.open('GET', 'https://webvium-download-counter.vercel.app/api?count=1&ref=null', false);
    r.send(null); 
if (r.status == 200) { 
    document.getElementById("nm0d").innerHTML = r.responseText + " Downloads.";
}
*/
function resetTimer() {
    i2 = 4;
    clearInterval(interval);
    interval = 0;
}

for (var i = 0; i < vr.length; i++) {
    let a = document.createElement('a');
    a.setAttribute('href', ul + vr[i] + ab);
    a.classList.add('btn');
    a.classList.add('btn-outline-dark');
    a.classList.add('webvI');
    a.setAttribute('target', '_blank');
    a.innerHTML = "Webvium v" + vr[i];
    versions.appendChild(a);
}

try {
    if (a > Webvium.currentVersion()) {
        document.getElementById("curr").innerHTML = "<b>You are using an outdated version of Webvium.</b>";
    } else {
        document.getElementById("curr").innerHTML = "<b>You are already using the Latest version.</b>";
    }
} catch (en) {
    document.getElementById("curr").innerHTML = "By downloading Webvium, you agree to its <a href=\"https://mrepol742.github.io/webvium/privacypolicy\">Privacy Policy</a>";
}