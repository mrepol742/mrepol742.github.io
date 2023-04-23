import java.net.*;
import java.util.*;
import java.io.*;

class IndexNow {
    private static String[] sg = new String[]{"/","/webvium/", "/webviumbeta", "/webviumdev/", "/webviumvpn/", "/rss/rss.xml", "/sitemap.xml", "/link-tree/", "/project-orion/", "/search/", "/project-orion/chat/"};
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