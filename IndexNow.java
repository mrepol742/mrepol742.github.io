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


import java.net.*;
import java.util.*;
import java.io.*;

class IndexNow {
    private static String[] sg = new String[]{"/","/webvium/", "/webviumbeta", "/webviumdev/", "/webviumvpn/", "/rss.xml", "/sitemap.xml", "/link-tree/", "/project-orion/", "/search/", "/project-orion/chat/"};
    private static String format = "https://bing.com/indexnow?url=https://mrepol742.github.io%1$s&key=f20756182df645f9b8cf6254654dd5da";

    public static void main(String[] sga) throws IOException {
        for (String da: sg) {
            url(String.format(format, da));
            System.out.println(String.format(format, da));
        }
    }

    private static void url(String url) throws IOException {
		URL obj = new URL(url);
		HttpURLConnection con = (HttpURLConnection) obj.openConnection();
		int responseCode = con.getResponseCode();
		System.out.println("POST Response Code :: " + responseCode);
		if (responseCode != HttpURLConnection.HTTP_OK) {
			System.out.println("Request not worked");
		}
	}
}