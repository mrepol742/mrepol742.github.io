/*
 *
 * Copyright (c) 2023 Melvin Jones Gallano Repol (mrepol742.github.io). All Rights Reserved.
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

function gen() {
    var red = document.getElementById("red").value;
    var green = document.getElementById("green").value;
    var blue = document.getElementById("blue").value;
    var clr = "rgb(" + red + "," + green + "," + blue + ")";
    document.body.style.setProperty("background-color", clr, "important");
    document.getElementById("box").value = clr;
    const nodeList = document.querySelectorAll(".card");
    for (var i = 0; i < nodeList.length; i++) {
        nodeList[i].style.backgroundColor = clr;
    }
    const nodeList2 = document.querySelectorAll(".footer");
    for (var i = 0; i < nodeList2.length; i++) {
        nodeList2[i].style.backgroundColor = clr;
    }
    const nodeList3 = document.querySelectorAll(".navbar");
    for (var i = 0; i < nodeList3.length; i++) {
        nodeList3[i].style.backgroundColor = clr;
    }
    const nodeList4 = document.querySelectorAll("#box");
    for (var i = 0; i < nodeList4.length; i++) {
        nodeList4[i].style.backgroundColor = clr;
    }
}

document.getElementById("red").addEventListener("input", gen);
document.getElementById("green").addEventListener("input", gen);
document.getElementById("blue").addEventListener("input", gen);
