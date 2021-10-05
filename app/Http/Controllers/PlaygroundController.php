<?php

namespace App\Http\Controllers;

use App\Cart\Concrete\Cart;
use App\Cart\Concrete\CartageFeature;
use App\Cart\Concrete\CouponFeature;
use App\Services\CartDiscounterService;

class PlaygroundController extends Controller
{
    protected $cartDiscounterService;

    public function __construct(CartDiscounterService $cartDiscounterService)
    {
        $this->cartDiscounterService = $cartDiscounterService;
    }

    public function index()

    {
        // return $this->cartDiscounterService->discount();

        // 折扣金額之後
        // 抵用折價劵
        // 運費?
        // 手續費?
        // 計算出應付總金額

        $cart = new Cart();

        // 初始化放Cart物件 - OK - Cart實作ICart
        $cart = new CouponFeature($cart);   

        // 初始化放CouponFeature物件 - OK
        // 因為CouponFeature繼承自CartDecorator, 而它是實作Icart
        $cart = new CartageFeature($cart);  

        dd($cart->cost());
    }
}
