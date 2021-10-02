<?php

namespace App\Discounters\Concrete;

use App\Discounters\Interfaces\Discounter;

class DiscountedByAmount implements Discounter
{
    /**
     * 折扣固定金額
     * @param int $amount
     * @return int
     */
    public function calculate(int $amount): int
    {
        return $amount - 100;
    }
}
