<?php

namespace App\Http\Controllers;

use App\Discounters\Concrete\CartDiscounter;
use App\Discounters\Concrete\DiscountedByPercentage;
use Illuminate\Http\Request;

class PlaygroundController extends Controller
{
    public function index()
    {
        $discounter = new CartDiscounter(
            2000,
            new DiscountedByPercentage());

        return $discounter->discount();
    }
}
