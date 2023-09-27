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

var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);
var version = urlParams.get("version");
var url = getUrl(version);

setTimeout(function () {
    window.location.href = url;
}, 3000);

document.getElementById("retry-download").href = url;

function getUrl(v) {
    if (version == null) {
        return "https://mrepol742-released-stable.netlify.app/Webvium%20VPN%20v" + latestVersionNameVPN + ".apk";
    }
    var versionF = version.replace("v", "").replace(".", "");
    if (versionF > latestVersionCodeVPN || versionListVPN[0] > versionF) {
        return "https://mrepol742.github.io/404.html?utm_source=mrepol742.github.io&utm_medium=vnf&utm_campaigns=webviumvpn";
    }
    return "https://mrepol742-released-stable.netlify.app/Webvium%20VPN%20v" + version + ".apk";
}
