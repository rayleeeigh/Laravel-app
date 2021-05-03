<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index',[
            'title' =>'Suroy-Suroy Sugbo'
        ]);
    }

    public function map(){
        return view('map',[
            'title' =>'Map of Cebu'
        ]);
    }

    public function adventures(){
        return view('adventures',[
            'title' =>'Adventure Trips'
        ]);
    }

    public function food(){
        return view('food',[
            'title' =>'Food Tours'
        ]);
    }
    
    public function historic(){
        return view('historic',[
            'title' =>'Historical Sites'
        ]);
    }

    public function admin(){
        return view('admin',[
            'title' =>'Admin'
        ]);
    }
}
