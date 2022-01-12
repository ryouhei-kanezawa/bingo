<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index()
    {
        $num_range=range(1,99);
        $rand_keys=array_rand($num_range,24);
        shuffle($rand_keys);

        return $rand_keys;
    }
}


