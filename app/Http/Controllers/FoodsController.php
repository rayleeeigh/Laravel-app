<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foods;

class FoodsController extends Controller
{
    public function show(){

        $foods = foods::all();

        return view('foods',[
            'foods' => $foods,
            'title' => 'Food Trips'
        ]);
    }
}
