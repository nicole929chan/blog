<?php

namespace App\Discounters\Concrete;

use App\Discounters\Interfaces\Discounter;

class DiscountedByNothing implements Discounter
{
    /**
     * 不打折
     * @param int $amount
     * @return int
     */
    public function calculate(int $amount): int
    {
        return $amount;
    }
}
