import java.text.SimpleDateFormat;
import java.util.Date;

public class Hello {
    public static void main(String[] args) {
        System.out.println("こんにちは世界 ");
        Date today = new Date();
        SimpleDateFormat format = new SimpleDateFormat("今日は y-M-d");
        System.out.println(format.format(today));
    }
}
