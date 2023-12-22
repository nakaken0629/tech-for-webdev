package root;

import static org.junit.jupiter.api.Assertions.assertEquals;

import org.junit.jupiter.api.Test;

public class TaxTest {
    @Test
    void 非課税商品は0パーセントの税込金額を返す() {
        Tax tax = new Tax();
        assertEquals(1000, tax.calcTax(1000, true, false, false));
    }

    @Test
    void 軽減税率対象商品を持ち帰った時は8パーセントの税込金額を返す() {
        Tax tax = new Tax();
        assertEquals(1080, tax.calcTax(1000, false, true, true));
    }

    @Test
    void 軽減税率対象商品を店内で飲食した時は10パーセントの税込金額を返す() {
        Tax tax = new Tax();
        assertEquals(1100, tax.calcTax(1000, false, true, false));
    }

    @Test
    void その他の場合は10パーセントの税込金額を返す() {
        Tax tax = new Tax();
        assertEquals(1100, tax.calcTax(1000, false, false, false));
    }
}
