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

async function doJob() {
    const response = await fetch("https://mrepol742-released-dev.netlify.app/info.json");
    const jsonData = await response.json();

    var items = document.querySelectorAll(".size12");
    items.forEach((e) => {
        e.innerHTML = "700KB";
    });
    var items3 = document.querySelectorAll(".version");
    items3.forEach((e3) => {
        e3.innerHTML = jsonData.versionFullName;
    });
    document.getElementById("upda").innerHTML = jsonData.latestRelease;
}
doJob();

function download() {
    window.location.href = "https://mrepol742.github.io/webviumdev/download/";
}
