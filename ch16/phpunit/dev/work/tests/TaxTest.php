<?php
namespace Root\Root;
use PHPUnit\Framework\TestCase;

final class TaxTest extends TestCase
{
    /* 構文：assertEqual(期待値, 実際の値); */
    public function test_非課税商品は0パーセントの税込金額を返す(): void
    {
        $tax = new Tax;
        $this->assertEquals(1000, $tax->calc_tax(1000, True, False, False));
    }

    public function test_軽減税理対象商品を持ち帰った時は8パーセントの税込金額を返す(): void
    {
        $tax = new Tax;
        $this->assertEquals(1080, $tax->calc_tax(1000, False, True, True));
    }   

    public function test_軽減税理対象商品を店内で飲食した時は10パーセントの税込金額を返す(): void
    {
        $tax = new Tax;
        $this->assertEquals(1100, $tax->calc_tax(1000, False, True, False));
    }   

    public function test_その他の場合は10パーセントの税込金額を返す(): void
    {
        $tax = new Tax;
        $this->assertEquals(1100, $tax->calc_tax(1000, False, False, False));
    }
}
