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

const a = new URLSearchParams(window.location.search).get('a');
const b = new URLSearchParams(window.location.search).get('b');
const c = new URLSearchParams(window.location.search).get('c');
const d = new URLSearchParams(window.location.search).get('d');
const e = new URLSearchParams(window.location.search).get('e');
const f = new URLSearchParams(window.location.search).get('f');
const g = new URLSearchParams(window.location.search).get('g');
const h = new URLSearchParams(window.location.search).get('h');
const i = new URLSearchParams(window.location.search).get('i');
let j = new URLSearchParams(window.location.search).get('j');
j = j || 'Empty'
var firebaseConfig = {
    apiKey: a,
    authDomain: b,
    projectId: c,
    storageBucket: d,
    messagingSenderId: e,
    appId: f,
    measurementId: g
};
firebase.initializeApp(firebaseConfig);
firebase.analytics();
firebase.database().ref('messages/').push().set({
    Subject: h,
    Message: i,
    Log: j
});
alert("ara")
