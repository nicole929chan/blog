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
    }
}
