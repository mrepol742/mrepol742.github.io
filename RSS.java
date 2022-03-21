import java.util.*;
import java.io.*;
import java.net.*;

class RSS {

    public static void main(String[] sg) {
        Runnable re = () -> {
            try {
            File folder = new File("/rss");
            if (!folder.exists()) {
                folder.mkdir();
            }
            File fe = new File("/rss/rss.xml");
            URL u = new URL("https://rss.app/feeds/cxpzEpVXXhcnweds.xml");
            URLConnection is = u.openConnection();
            InputStream inputStream = is.getInputStream();
            InputStreamReader inputStreamReader = new InputStreamReader(inputStream);
            BufferedReader c = new BufferedReader(inputStreamReader);
            String tf5;
            StringBuilder cd = new StringBuilder();
            while ((tf5 = c.readLine()) != null) {
                 cd.append(tf5).append("\n");
            }
            c.close();
            inputStreamReader.close();
            inputStream.close();
            FileWriter fw = new FileWriter(fe);
            BufferedWriter bufferedWriter = new BufferedWriter(fw);
            bufferedWriter.write(cd.toString());
            bufferedWriter.close();
            fw.close();
            System.out.println("Successfully fetch RSS");
            } catch (Exception en) {
                System.out.println("Failed to fetch RSS");
            }
        };
        new Thread(re).start();
        
    }
}