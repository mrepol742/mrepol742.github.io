import java.text.SimpleDateFormat;
import java.io.*;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Locale;

import org.jsoup.*;
import org.jsoup.select.*;
import org.jsoup.helper.*;
import org.jsoup.internal.*;
import org.jsoup.nodes.*;
import org.jsoup.parser.*;

class Sitemap {

    private static List<Link> links = new ArrayList<>();
    private static SimpleDateFormat format =  new SimpleDateFormat("yyyy-MM-dd'T'HH:mm:ssSSSXXX");
    private static String header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><?xml-stylesheet type=\"text/xsl\" href=\"/css/sitemap.xsl\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\">\n";
    private static String footer = "</urlset>";
    private static String body = "<url>\n" +
    "  <loc>%1$s</loc>\n" +
    "  <lastmod>%2$s</lastmod>\n";
    private static StringBuilder sitemap = new StringBuilder();
    private static String url;
    private static String domain;
    private static boolean isHome = false;

    public static void main(String[] args) {
        //String domain = args[0];
        //String url = args[1];
       
        url = "/home/alexaguno/Documents/mrepol742.github.io";
        domain = "https://mrepol742.github.io";

        find(new File(url), domain);

        sitemap.append(header);
        for (Link link: links) {
            sitemap.append(String.format(body, link.url, link.date));
            sitemap.append(link.more);
            sitemap.append("</url>\n");
        }
        sitemap.append(footer);
        if (write(new File(url + "/sitemap.xml"), sitemap.toString(), false)) {
            System.out.println("\nSitemap generated for " + domain);
        } else {
            System.out.println("\nFailed to generate sitemap.");
        }
    }

    public static String getImages(File file) {
        StringBuilder images = new StringBuilder();
        Document doc = Jsoup.parse(read(file, "\n"));
        Elements image = doc.getElementsByTag("img");
        for (Element el : image) {
            String src = el.attr("src");
            if (src.startsWith("/images/")) {
                images.append("  <image:image>\n    <image:loc>" + domain + src + "</image:loc>\n  </image:image>");
            }
        }
        return images.toString();
    }

    public static String getVideos(File file) {
        StringBuilder videos = new StringBuilder();
        Document doc = Jsoup.parse(read(file, "\n"));
        Elements image = doc.getElementsByTag("source");
        for (Element el : image) {
            String src = el.attr("src");
            if (src.startsWith("/videos/")) {
                videos.append("  <video:video>\n    <video:title>" + (src.replaceAll("%20", " ").replaceAll("/videos/","").replaceAll(".mp4", ""))+ "</video:title>\n    <video:content_loc>" + domain + src + "</video:content_loc>\n  </video:video>");
            }
        }
        return videos.toString();
    }

    public static void find(File file, String domain) {
        if (file.list() == null) {
            System.out.println("no index " + file.toString());
            return;
        }
        if (file.isDirectory() && !isHome) {
            File root = new File(url+"/index.html");
            System.out.println(format.format(root.lastModified()) + " | " + domain);
            links.add(new Link(domain, format.format(root.lastModified()), getImages(root) + "\n" + getVideos(root)));
            isHome = true;
        }
        String[] listFiles = file.list();
        for (String str: listFiles) {
            File folder = new File(file.getAbsolutePath() + "/" + str);
            if (folder.isDirectory()) {
                File hasIndex = new File(folder.getAbsolutePath() + "/index.html");
                if (hasIndex.isFile()) {
                     System.out.println(format.format(hasIndex.lastModified()) + " | " + domain + hasIndex.getParentFile().getAbsolutePath().replace(url, ""));
                    links.add(new Link(domain + hasIndex.getParentFile().getAbsolutePath().replace(url, "") , format.format(hasIndex.lastModified()), getImages(hasIndex) + "\n" + getVideos(hasIndex)));
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

class Link {
    public String url;
    public String date;
    public String more;

    public Link(String url, String date, String more) {
        this.url = url;
        this.date = date;
        this.more = more;
    }
}