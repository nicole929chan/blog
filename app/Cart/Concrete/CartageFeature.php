<?php

namespace App\Cart\Concrete;

class CartageFeature extends CartDecorator
{
    public function cost(): int
    {
        return $this->cart->cost() + 80;
    }

    public function description(): string
    {
        return $this->cart->description() . '運費80元';
    }
}