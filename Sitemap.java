import java.text.SimpleDateFormat;
import java.io.*;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Locale;

class Sitemap {

    private static List<Link> links = new ArrayList<>();
    private static SimpleDateFormat format =  new SimpleDateFormat("yyyy-MM-dd", Locale.US);
    private static String header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
    private static String footer = "</urlset>";
    private static String body = "<url>\n" +
    "  <loc>%1$s</loc>\n" +
    "  <lastmod>%2$s</lastmod>\n" +
    "</url>\n";
    private static StringBuilder sitemap = new StringBuilder();
    private static String url;

    public static void main(String[] args) {
        //String domain = args[0];
        //String url = args[1];
        url = "/home/mrepol742/VSCodeProjects/mrepol742.github.io";
        String domain = "https://mrepol742.github.io";
        find(new File(url), domain);

        sitemap.append(header);
        for (Link link: links) {
            sitemap.append(String.format(body, link.url, link.date));
        }
        sitemap.append(footer);
        if (write(new File(url + "/sitemap.xml"), sitemap.toString(), false)) {
            System.out.println("Sitemap generated for " + domain);
        } else {
            System.out.println("Failed to generate sitemap.");
        }
    }

    public static void find(File file, String domain) {
        if (file.list() == null) {
            System.out.println("no index " + file.toString());
            return;
        }
        if (file.isDirectory()) {
            System.out.println(domain + "/   " + format.format(file.lastModified()));
                    links.add(new Link(domain + "/", format.format(file.lastModified())));
        }
        String[] listFiles = file.list();
        for (String str: listFiles) {
            File folder = new File(file.getAbsolutePath() + "/" + str);
            if (folder.isDirectory()) {
                File hasIndex = new File(folder.getAbsolutePath() + "/index.html");
                if (hasIndex.isFile()) {
                     System.out.println(domain + hasIndex.getParentFile().getAbsolutePath().replace(url, "") + "/   " + format.format(file.lastModified()));
                    links.add(new Link(domain + hasIndex.getParentFile().getAbsolutePath().replace(url, "") + "/", format.format(file.lastModified())));
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
}

class Link {
    public String url;
    public String date;

    public Link(String url, String date) {
        this.url = url;
        this.date = date;
    }
}