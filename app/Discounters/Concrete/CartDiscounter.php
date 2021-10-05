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
        // CartDiscount 委託 $this->discounter 進行折價這個行為
        return $this->discounter->calculate($this->amount);
    }

    public function setDiscounter(Discounter $discounter)
    {
        $this->discounter = $discounter;
    }
}
