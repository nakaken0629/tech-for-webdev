require "tax"

RSpec.describe Tax do
  describe "#calc_tax" do
    it "非課税商品は、0%の税込金額を返す" do
      expect(Tax.new.calc_tax(1000, true, false, false)).to eq(1000)
    end
    it "軽減税理対象商品を持ち帰った時は、8%の税込金額を返す" do
      expect(Tax.new.calc_tax(1000, false, true, true)).to eq(1080)
    end
    it "軽減税理対象商品を店内で飲食した時は、10%の税込金額を返す" do
      expect(Tax.new.calc_tax(1000, false, true, false)).to eq(1100)
    end
    it "その他の場合は、10%の税込金額を返す" do
      expect(Tax.new.calc_tax(1000, false, false, false)).to eq(1100)
    end
  end
end
