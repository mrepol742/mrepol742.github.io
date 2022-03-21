import java.net.*;
import java.util.*;
import java.io.*;

class IndexNow {
    static String[] sg = new String[]{"/news", "/", "/sitemap", "/webvium", "/webviumdev", "/webviumvpn", "/download"};
    static String format = "https://bing.com/indexnow?url=https://mrepol742.github.io%1$s&key=f20756182df645f9b8cf6254654dd5da";
    public static void main(String[] sg) {
       
            for (String da : sg) {
                Runnable re = ()->{
 try {
        URL u = new URL(String.format(format, da));
        URLConnection is = u.openConnection();
      
          } catch (Exception e) {
            System.out.println(e.getMessage());
        }
                };
                new Thread(re).start();
            }
      
    }
}