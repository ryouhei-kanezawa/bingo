<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index()
    {
        $num_range=range(1,99);
        shuffle($num_range);
        $bingo_range=array_splice($num_range,0,24);
        array_splice($bingo_range,12,0,"");

        return $bingo_range;
    }
}


