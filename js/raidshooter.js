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

var a = 10;
var fo = "1.0";
var upda = "Jan 19, 2022";
var ul = "https://github.com/mrepol742/released/blob/stable/Raid%20Shooter%20v";
var ab = ".apk?raw=true";
var vr = ["1.0"];
let items = document.querySelectorAll('.size12')
items.forEach((e) => {
    e.innerHTML = "53KB";
})
let items3 = document.querySelectorAll('.version')
items3.forEach((e3) => {
    e3.innerHTML = fo;
})

document.getElementById("upda").innerHTML = upda;
document.getElementById("download_btn").innerHTML = "Download Raid Shooter v" + fo;

let i2 = 10;
let interval;

function download() {
    if (!interval) {
		interval = setInterval(ct, 1000);
	}
}

function ct() {
	if (i2 <= 0) {
        document.getElementById("download_btn").innerHTML = "Download Raid Shooter v" + fo;
		window.location.href = ul+fo+ab;
        resetTimer();
	} else {
		i2--;
        document.getElementById("download_btn").innerHTML = "Downloading in ...... " + i2;
	}
 
}

function resetTimer() {
	i2 = 10;
	clearInterval(interval)
	interval = 0
}

for (var i = 0; i < vr.length; i++) {
    let a = document.createElement('a');
    a.setAttribute('href', ul+vr[i]+ab);
    a.classList.add('btn');
    a.classList.add('btn-outline-dark');
    a.classList.add('webvI');
    a.setAttribute('target', '_blank');
    a.innerHTML = "Raid Shooter v"+ vr[i];
    versions.appendChild(a);
}