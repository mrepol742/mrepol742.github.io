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

window.addEventListener('scroll', reveal)
reveal();
lozad().observe();
function reveal() {
    let items = document.querySelectorAll('.obj')
    for (let i = 0; i < items.length; i++) {
        let windowHeight = window.innerHeight;
        let revealTop = items[i].getBoundingClientRect().top;
        let distance = 50;

        if (revealTop < windowHeight - distance) {
            items[i].classList.add('active')
        } else {
            items[i].classList.remove('active')
        }
    }
}
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-NHWCF85JCG');