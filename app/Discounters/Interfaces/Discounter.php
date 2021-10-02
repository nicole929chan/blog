<?php

namespace App\Discounters\Interfaces;

interface Discounter
{
    public function calculate(int $amount): int;
}
