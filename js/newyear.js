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

var yr = new Date().getFullYear() + 1;
var future = new Date("Jan 1, " + yr + " 00:00:00").getTime();
setInterval(function () {
  var now = new Date().getTime();
  var count = future - now;
  var days = Math.floor(count / (1000 * 60 * 60 * 24));
  var hours = Math.floor((count % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((count % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((count % (1000 * 60)) / 1000);
  document.getElementById("webvium").innerHTML = days + ":" + hours + ":" + minutes + ":" + seconds;
}, 1000);
