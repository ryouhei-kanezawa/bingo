<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomNumberController extends Controller
{
    public function index(Request $request)
    {
        $str_exclusion = $request->input('number');
        $exclusion=json_decode($str_exclusion);
        while(TRUE){
            $rand_num=mt_rand(1,99);
            if(!in_array($rand_num,$exclusion)){
                return $rand_num;
            }
        }
    }
}
