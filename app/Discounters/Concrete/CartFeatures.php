<?php

namespace App\Discounters\Concrete;

use App\Discounters\Interfaces\ICart;

abstract class CartFeatures implements ICart
{
    abstract  public function cost();
    abstract  public function description();
}
