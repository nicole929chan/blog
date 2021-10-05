<?php

namespace App\Cart\Concrete;

use App\Cart\Interfaces\ICart;

/**
 * 基礎特徵類別(裝飾者)
 */
abstract class CartDecorator implements ICart
{
    protected $cart;

    public function __construct(ICart $cart)
    {
        $this->cart = $cart;
    }

    abstract  public function cost();
    abstract  public function description();
}
