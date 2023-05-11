import java.text.SimpleDateFormat;
import java.io.*;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Locale;

import org.json.*;

import org.jsoup.*;
import org.jsoup.select.*;
import org.jsoup.helper.*;
import org.jsoup.internal.*;
import org.jsoup.nodes.*;
import org.jsoup.parser.*;

class RSS {

    private static List<Item> items = new ArrayList<>();
    private static JSONObject obj = new JSONObject();
    //Sun, 16 Apr 2023 13:47:14 GMT <
    private static SimpleDateFormat format =  new SimpleDateFormat("E, dd MMMM yyyy k:m:s z");
    private static String header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<rss xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"2.0\" xmlns:media=\"http://search.yahoo.com/mrss/\">\n<channel>\n";
    private static String footer = "</channel>\n</rss>";
    private static String body = "<item>\n" +
    "  <title>%1$s</title>\n" +
    "  <description>%2$s</description>\n" +
    "  <link>%3$s</link>\n" + 
    "  <creator>%4$s</creator>\n" +
    "  <content medium=\"image\" url=\"%5$s\"/>\n";

    private static StringBuilder rss = new StringBuilder();
    private static String url;
    private static String domain;
    private static boolean isHome = false;

    public static void main(String[] args) {
        //String domain = args[0];
        //String url = args[1];
       
        url = "/home/alexaguno/Documents/mrepol742.github.io";
        domain = "https://mrepol742.github.io";

        rss.append(header);
                find(new File(url), domain);
        for (Item item: items) {
            rss.append(String.format(body, item.title, item.description, item.link, "<![CDATA[ Melvin Jones Repol ]]>", item.medium_url));
            rss.append("</item>\n");
        }
        rss.append(footer);
        if (write(new File(url + "/rss.xml"), rss.toString(), false)) {
            System.out.println("\nRSS generated for " + domain);
        } else {
            System.out.println("\nFailed to generate rss.");
        }
    }

    public static String getTitle(File file) {
        StringBuilder str = new StringBuilder();
        Document doc = Jsoup.parse(read(file, "\n"));
        Elements title = doc.getElementsByTag("title");
        return title.get(0).toString().replace("<title>", "").replace("</title>", "");
    }

    public static String[] getMeta(File file) {
        String[] data = {"",""};
        Document doc = Jsoup.parse(read(file, "\n"));
        Elements metas = doc.getElementsByTag("meta");
        for (Element meta : metas) {
            String content = meta.attr("content");
            String name = meta.attr("name");
            String prop = meta.attr("property");
            if (name.equals("description")) {
                data[0] = content;
            }
            if (prop.equals("og:image")) {
                data[1] = domain + content;
            }
        }
        return data;
    }

    public static void find(File file, String domain) {
        if (file.list() == null) {
            System.out.println("no index " + file.toString());
            return;
        }
        if (file.isDirectory() && !isHome) {
            String[] metas = getMeta(new File(url+"/index.html"));
            rss.append("  <title>");
            rss.append("<![CDATA[");
            rss.append(getTitle(new File(url+"/index.html")));
            rss.append("]]>");
            rss.append("</title>\n");
            rss.append("  <description>");
            rss.append("<![CDATA[");
            rss.append( metas[0]);
            rss.append("]]>");
            rss.append("</description>\n");
            rss.append("  <link>");
            rss.append(domain);
            rss.append("  </link>\n");
            rss.append("  <image>\n");
            rss.append("    <url>");
            rss.append(metas[1]);
            rss.append("</url>\n");
            rss.append("    <title>");
            rss.append(getTitle(new File(url+"/index.html")));
            rss.append("</title>\n");
            rss.append("    <link>");
            rss.append(domain);
            rss.append("</link>\n");
            rss.append("  </image>\n  <generator> RSS for Melvin Jones Repol </generator>\n");
            rss.append("  <lastBuildDate>");
            rss.append(format.format(new Date()));
            rss.append("</lastBuildDate>\n");
            rss.append("  <link href=\"https://" + domain + "/rss.xml\"" + " rel=\"self\" type=\"application/rss+xml\"/>\n");
            rss.append("  <language><![CDATA[ en ]]></language>\n");
            isHome = true;
        }

        String[] listFiles = file.list();
        for (String str: listFiles) {
            File folder = new File(file.getAbsolutePath() + "/" + str);
            if (folder.isDirectory()) {
                File hasIndex = new File(folder.getAbsolutePath() + "/index.html");
                if (hasIndex.isFile()) {
                    System.out.println(format.format(hasIndex.lastModified()) + " | " + domain + hasIndex.getParentFile().getAbsolutePath().replace(url, ""));
                    String[] metas = getMeta(new File(hasIndex.getParentFile().getAbsolutePath() + "/index.html"));
                     items.add(new Item("<![CDATA[" + getTitle(new File(hasIndex.getParentFile().getAbsolutePath() + "/index.html")) + "]]>", "<![CDATA[" + metas[0] + "]]>", domain + hasIndex.getParentFile().getAbsolutePath().replace(url, ""), metas[1]));
                     find(new File (file.getAbsolutePath() + "/" + str), domain);
                }
            }
        
        }
    }


    public static boolean write(File location, String data, boolean readOnly) {
        try {
            FileWriter fw = new FileWriter(location, false);
            fw.write(data);
            fw.close();
            if (readOnly) {
                boolean bn = location.setReadOnly();
            }
            return true;
        } catch (Exception exception) {
            exception.printStackTrace();
        }
        return false;
    }

       public static String read(java.io.File fe, String line) {
        try {
            if (!fe.exists()) {
                return null;
            }
            FileReader fr = new FileReader(fe);
            BufferedReader br = new BufferedReader(fr);
            StringBuilder sb = new StringBuilder();
            String ln;
            while ((ln = br.readLine()) != null) {
                sb.append(ln);
                sb.append(line);
            }
            fr.close();
            br.close();
            return sb.toString();
        } catch (Exception exception) {
            exception.printStackTrace();
        }
        return null;
    }
}

class Item {
    public String title;
    public String description;
    public String link;
    public String medium_url;

    public Item(String title, String description, String link, String medium_url) {
        this.title = title;
        this.description = description;
        this.link = link;
        this.medium_url = medium_url;
    }
}