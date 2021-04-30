<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adventures;

class AdventuresController extends Controller
{
    public function show(){

        $adventures = adventures::all();

        return view('adventures',[
            'adventures' => $adventures,
            'title' => 'Adventure Trips'
        ]);
    }
}
