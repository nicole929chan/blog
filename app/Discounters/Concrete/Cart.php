<?php

namespace App\Discounters\Concrete;

use App\Discounters\Interfaces\ICart;

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
