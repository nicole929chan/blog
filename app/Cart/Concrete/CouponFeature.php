<?php

namespace App\Cart\Concrete;

class CouponFeature extends CartDecorator
{
    public function cost(): int
    {
        // return -200;
        return $this->cart->cost() - 200;
    }

    public function description(): string
    {
        // return '使用折價劵200元';
        return $this->cart->description() . '使用折價劵200元';
    }
}
