<?php

namespace App\Http\Controllers;

use App\Discounters\Concrete\CartDiscounter;
use App\Discounters\Concrete\DiscountedByAmount;
use App\Discounters\Concrete\DiscountedByPercentage;
use Illuminate\Http\Request;

class PlaygroundController extends Controller
{
    public function index()
    {
        // $cartDiscounter = new CartDiscounter(2000);  不指定折扣物件也可以

        $cartDiscounter = new CartDiscounter(
            2000,
            new DiscountedByPercentage());

        // 改為另一種折扣方式計算
        // $cartDiscounter->setDiscounter(new DiscountedByAmount());

        return $cartDiscounter->discount();
    }
}
