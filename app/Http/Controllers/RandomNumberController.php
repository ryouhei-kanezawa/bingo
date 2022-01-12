<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomNumberController extends Controller
{
    public function index()
    {
        $rand_keys=mt_rand(1,99);

        return $rand_keys;
    }
}
