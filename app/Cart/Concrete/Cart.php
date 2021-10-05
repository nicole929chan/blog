<?php

namespace App\Cart\Concrete;

use App\Cart\Interfaces\ICart;


/**
 * 基礎類別
 */
class Cart implements ICart
{
    public function cost(): int
    {
        return 1280;
    }

    public function description(): string
    {
        return '購物車尚未折扣前金額';
    }
}
