<?php

namespace App\Discounters\Concrete;

use App\Discounters\Interfaces\Discounter;

class DiscountedByPercentage implements Discounter
{
    /**
     * 百分比折扣
     * @param int $amount
     * @return int
     */
    public function calculate(int $amount): int
    {
        return $amount * 0.9;
    }
}
