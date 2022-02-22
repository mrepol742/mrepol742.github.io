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

var a = 11;
var fo = "1.1";
var upda = "Feb 22, 2022";
var ul = "https://github.com/mrepol742/released/blob/stable/Webvium%20VPN%20v";
var ab = ".apk?raw=true";
var vr = ["1.0"];
var size = ["7"];

let items = document.querySelectorAll('.size12');
items.forEach((e) => {
    e.innerHTML = "7MB";
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
        window.location.href = ul + fo + ab;
        resetTimer();
    } else {
        i2--;
        document.getElementById("download_btn").innerHTML = "Downloading in  " + i2 + " secs";
    }

}

function resetTimer() {
    i2 = 4;
    clearInterval(interval);
    interval = 0;
}

for (var i = 0; i < vr.length; i++) {
    let list = document.createElement('li');
    list.classList.add('list-group-item');
 
    let a = document.createElement('a');
    a.setAttribute('href', ul + vr[i] + ab);
    a.classList.add('btn');

    a.classList.add('webvI');
    a.setAttribute('target', '_blank');
    a.innerHTML = "- Webvium VPN v" + vr[i] + " " + size[i] + "MB";
    list.appendChild(a);

    versions.appendChild(list);
}

try {

    if (a > WebviumVPN.currentVersion()) {
        document.getElementById("curr").innerHTML = "<b>You are using an outdated version of Webvium VPN.</b>";
    } else {
        document.getElementById("curr").innerHTML = "<b>No need to Download. You are already using the Latest version.</b>";
    }
} catch (en) {
    document.getElementById("curr").innerHTML = "By downloading Webvium VPN, you agree to its <a href=\"https://mrepol742.github.io/webviumvpn/privacypolicy\">Privacy Policy</a>";
}