import java.text.SimpleDateFormat;
import java.io.*;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Locale;

class SitemapVid {

    private static List<Video> video = new ArrayList<>();
    private static String header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:video=\"http://www.google.com/schemas/sitemap-video/1.1\">\n<url>\n<loc>https://mrepol742.github.io/</loc>\n";
    private static String footer = "</url>\n</urlset>";
    private static String body = " <video:video>\n" +
    "    <video:title>%1$s</video:title>\n" +
      "    <video:content_loc>%2$s</video:content_loc>\n" +
    "</video:video>\n";
    private static StringBuilder sitemap = new StringBuilder();
    private static String url;

    public static void main(String[] args) {
        //String domain = args[0];
        //String url = args[1];
        url = "/home/alexaguno/Documents/mrepol742.github.io/";
        String domain = "https://mrepol742.github.io/videos";
        find(new File(url+"videos"), domain);

        sitemap.append(header);
        for (Video vid: video) {
            sitemap.append(String.format(body, vid.title, vid.url));
        }
        sitemap.append(footer);
        if (write(new File(url + "/sitemap-vid.xml"), sitemap.toString(), false)) {
            System.out.println("Sitemap-vid generated for " + domain);
        } else {
            System.out.println("Failed to generate sitemap-vid.");
        }
    }

    public static void find(File file, String domain) {
        if (file.list() == null) {
            return;
        }
        String[] listFiles = file.list();
        for (String str: listFiles) {
            File folder = new File(file.getAbsolutePath() + "/" + str);
            if (folder.isFile()) {
                     System.out.println(domain + "/" + str);
                    video.add(new Video(str.replace(".mp4", ""), domain + "/" + str));
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
}

class Video {
    public String title;
    public String url;

    public Video(String title, String url) {
        this.title = title;
        this.url = url;
    }
}