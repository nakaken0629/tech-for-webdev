package root;

public class Tax {
    public int calcTax(int price, boolean isExempted, boolean isReduced, boolean isTakenOut) {
        if (isExempted) {
            return price;
        } else if (isReduced && isTakenOut) {
            return (int) (price * 1.08);
        } else {
            return (int) (price * 1.1);
        }
    }
}
