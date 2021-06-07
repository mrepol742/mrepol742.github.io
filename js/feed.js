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

var firebaseConfig = {
    apiKey: Feed.apikey(),
    authDomain: Feed.authDomain(),
    projectId: Feed.projectId(),
    storageBucket: Feed.storageBucket(),
    messagingSenderId: Feed.messagingSenderId(),
    appId: Feed.appId(),
    measurementId: Feed.measurementId()
};
firebase.initializeApp(firebaseConfig);
firebase.analytics();
firebase.database().ref('feedbacks/').push().set({
    Webvium: Feed.getWebviumVersion(),
    Message: Feed.getMessage(),
    Log: Feed.getLog()
});
Feed.succeed(true);
