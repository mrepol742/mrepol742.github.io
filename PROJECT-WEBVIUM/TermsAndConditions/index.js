/*
*
* Copyright (c) 2021 Melvin Jones Repol (mrepol742.github.io). All rights reserved.
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

function openNav() {
  document.getElementById("mrepol742_sidebar").style.transform = 'translateX(0%)';
  var bg = document.createElement('div')
bg.setAttribute('class', 'sidebar-bg')
bg.setAttribute('id', 'sbg')
document.body.appendChild(bg)
document.getElementById('sbg').addEventListener('click', () => {
   closeNav();
 });
}

function closeNav() {
  document.getElementById("mrepol742_sidebar").style.transform = 'translateX(-100%)';
  var bg = document.getElementById('sbg')
 document.body.removeChild(bg)
}
