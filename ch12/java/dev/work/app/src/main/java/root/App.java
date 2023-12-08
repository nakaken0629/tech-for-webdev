/*
 * This Java source file was generated by the Gradle 'init' task.
 */
package root;

import java.io.IOException;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.Response;

class Example {
    final OkHttpClient client = new OkHttpClient();

    String run(String url) throws IOException {
        Request request = new Request.Builder()
                .url(url)
                .build();

        try (Response response = client.newCall(request).execute()) {
            return response.body().string();
        }
    }
}

public class App {
    public String getGreeting() {
        return "Hello World!";
    }

    public static void main(String[] args) throws IOException {
        // System.out.println(new App().getGreeting());
        Example example = new Example();
        String response = example.run("https://www.impress.co.jp/");
        System.out.println(response);
    }
}
