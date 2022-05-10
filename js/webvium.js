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
let vr = ["1.0", "1.1", "1.2", "1.3", "1.4", "1.5", "1.6", "1.7", "1.8", "1.8.1", "1.9", "2.0", "2.1", "2.2", "2.3", "2.4", "2.5", "2.6", "2.7"];
let size = ["600", "585", "590", "589", "577", "585", "585", "590", "552", "552", "485", "485", "488", "490", "486", "574", "486", "488", "494"];

let items = document.querySelectorAll('.size12');
items.forEach((e) => {
    e.innerHTML = updateSize;
});
let items3 = document.querySelectorAll('.version');
items3.forEach((e3) => {
    e3.innerHTML = latestVersionName;
});

document.getElementById("upda").innerHTML = updateDate;

function download() {
    window.location.href = downloadUrlPrefix + latestVersionName;
}

for (var i = 0; i < vr.length; i++) {
    let list = document.createElement('li');
    list.classList.add('list-group-item');
    let a = document.createElement('a');
    a.setAttribute('href', downloadUrlPrefix + vr[i] + ".apk?raw=true");
    a.classList.add('btn');
    a.classList.add('webvI');
    a.setAttribute('target', '_blank');
    a.innerHTML = "- Webvium v" + vr[i] + " " + size[i] + "KB";
    list.appendChild(a);
    versions.appendChild(list);
}

try {
    if (latestVersionCode > Webvium.currentVersion()) {
        document.getElementById("curr").innerHTML = "<b>You are using an outdated version of Webvium.</b>";
    } else {
        document.getElementById("curr").innerHTML = "<b>You are already using the Latest version.</b>";
    }
} catch (en) {
}