<?php

namespace App\Http\Controllers;


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
        return $this->cartDiscounterService->discount();

        // 折扣金額之後
        // 抵用折價劵
        // 運費?
        // 手續費?
        // 計算出應付總金額
    }
}
