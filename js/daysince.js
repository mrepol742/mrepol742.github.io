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

var date1 = new Date("03/18/2020");

var date = new Date();
var m = date.getMonth()+1;
var d = date.getDate();
var y = date.getFullYear();

var date2 = new Date(m + "/" + d + "/" + y);
  
var time = date2.getTime() - date1.getTime();
var days = time / (1000 * 3600 * 24);
  
document.getElementById("since").innerHTML = ". It's been " + days + " days since.";