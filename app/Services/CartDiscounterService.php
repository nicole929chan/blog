<?php

namespace App\Services;

use App\Discounters\Concrete\CartDiscounter;
use App\Discounters\Concrete\DiscountedByAmount;
use App\Discounters\Concrete\DiscountedByPercentage;

class CartDiscounterService
{
    public function discount(): int
    {
        // 不指定折扣物件可以以
        // $cartDiscounter = new CartDiscounter();
        // 切換另一種折扣計算方式
        // $cartDiscounter->setDiscounter(new DiscountedByAmount());

        $cartDiscounter = new CartDiscounter(2000, new DiscountedByPercentage());

        return $cartDiscounter->discount();
    }
}
