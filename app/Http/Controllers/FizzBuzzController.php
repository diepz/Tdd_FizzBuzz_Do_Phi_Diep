<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    public function getData()
    {
        $numbers = [];
        for ($i = 1; $i <= 100; $i++) {
            $numbers[$i] = $i;
            if ($i%3 == 0) {
                $numbers[$i] = 'fizz';
            }
            if ($i%5 == 0) {
                $numbers[$i] = 'buzz';

            }
            if ($i % 15 == 0 ){
                $numbers[$i] = 'fizzbuzz';
            }
        }

        return $numbers;
    }
}
