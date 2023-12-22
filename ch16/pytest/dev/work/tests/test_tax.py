from tax import calc_tax


def test_非課税商品は0パーセントの税込金額を返す():
    assert 1000 == calc_tax(1000, True, False, False)


def test_軽減税理対象商品を持ち帰った時は8パーセントの税込金額を返す():
    assert 1080 == calc_tax(1000, False, True, True)


def test_軽減税理対象商品を店内で飲食した時は10パーセントの税込金額を返す():
    assert 1100 == calc_tax(1000, False, True, False)


def test_その他の場合は10パーセントの税込金額を返す():
    assert 1100 == calc_tax(1000, False, False, False)
