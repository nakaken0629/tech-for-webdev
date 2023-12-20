const calc_tax = require('./tax');

test('非課税商品は、0%の税込金額を返す', () => {
    expect(calc_tax(1000, true, false, false)).toBe(1000);
});
test('軽減税理対象商品を持ち帰った時は、8%の税込金額を返す', () => {
    expect(calc_tax(1000, false, true, true)).toBe(1080);
});
test('軽減税理対象商品を店内で飲食した時は、10%の税込金額を返す', () => {
    expect(calc_tax(1000, false, true, false)).toBe(1100);
});
test('その他の場合は、10%の税込金額を返す', () => {
    expect(calc_tax(1000, false, false, true)).toBe(1100);
});
