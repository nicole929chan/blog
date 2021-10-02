<?php

namespace App\Discounters\Concrete;

use App\Discounters\Interfaces\Discounter;

class CartDiscounter
{
    public $amount;
    public $discounter;

    /**
     * 不指定折扣類別時, 以不打折為預設;
     * @param int $amount
     * @param Discounter|null $discounter
     */
    public function __construct(int $amount, ?Discounter $discounter = null)
    {
        $this->amount = $amount;
        $this->discounter = $discounter ?? new DiscountedByNothing();
    }

    public function discount(): int
    {
        return $this->discounter->calculate($this->amount);
    }

    public function setDiscounter(Discounter $discounter)
    {
        $this->discounter = $discounter;
    }
}
