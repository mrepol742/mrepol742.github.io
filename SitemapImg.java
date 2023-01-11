import java.io.*;
import java.util.ArrayList;
import java.util.List;

class SitemapImg {

    private static List<Image> image = new ArrayList<>();
    private static String header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\">\n<url>\n<loc>https://mrepol742.github.io/</loc>\n";
    private static String footer = "</url>\n</urlset>";
    private static String body = " <image:image>\n" +
      "    <image:loc>%1$s</image:loc>\n" +
    "</image:image>\n";
    private static StringBuilder sitemap = new StringBuilder();
    private static String url;

    public static void main(String[] args) {
        //String domain = args[0];
        //String url = args[1];
        url = "/home/alexaguno/Documents/mrepol742.github.io/";
        String domain = "https://mrepol742.github.io/images";
        find(new File(url+"images"), domain);

        sitemap.append(header);
        for (Image img: image) {
            sitemap.append(String.format(body, img.url));
        }
        sitemap.append(footer);
        if (write(new File(url + "/sitemap-img.xml"), sitemap.toString(), false)) {
            System.out.println("Sitemap-img generated for " + domain);
        } else {
            System.out.println("Failed to generate sitemap-img.");
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
                    image.add(new Image(domain + "/" + str));
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

class Image {
    public String url;

    public Image(String url) {
        this.url = url;
    }
}