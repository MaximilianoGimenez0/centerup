<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mathController
{
    public function sum(float $a, float $b)
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b)
    {
        return $a - $b;
    }
}
