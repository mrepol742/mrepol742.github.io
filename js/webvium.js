/*
 *
 * Copyright (c) 2023 Melvin Jones Repol (mrepol742.github.io). All Rights Reserved.
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

var items = document.querySelectorAll(".size12");
items.forEach((e) => {
    e.innerHTML = updateSize;
});
var items3 = document.querySelectorAll(".version");
items3.forEach((e3) => {
    e3.innerHTML = latestVersionName;
});

document.getElementById("upda").innerHTML = updateDate;

function download() {
    window.location.href = downloadUrlPrefix.replace("%WEBVIUM%", latestVersionName);
}

for (var i = 0; i < versionList.length; i++) {
    var list = document.createElement("li");
    list.classList.add("list-group-item");
    var a = document.createElement("a");
    a.setAttribute("href", downloadUrlPrefix.replace("%WEBVIUM%", versionList[i]));
    a.setAttribute("target", "_blank");
    a.innerHTML = "Webvium v" + versionList[i] + " (" + sizeList[i] + "KB)";
    list.appendChild(a);
    versions.appendChild(list);
}

try {
    if (latestVersionCode > Webvium.currentVersion()) {
        if (Webvium.currentVersion() + 1 != latestVersionCode) {
            document.getElementById("download_btn").style.backgroundColor = "#DB4437";
            document.getElementById("download_btn").style.borderColor = "#DB4437";
        }
        document.getElementById("download_btn").innerHTML = "Update Now";
    }
} catch (en) {}
