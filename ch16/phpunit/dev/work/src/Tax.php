<?php

namespace Root\Root;

final class Tax
{
    public function calc_tax(int $price, bool $is_exempted, bool $is_reduced, bool $is_taken_out): int
    {
        if ($is_exempted)
        {
            return $price;
        }
        else if ($is_reduced && $is_taken_out)
        {
            return (int) ($price * 1.08);
        }
        else
        {
            return (int) ($price * 1.1);
        }
    }
}
