<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accomodations;

class AccomodationsController extends Controller
{
    public function show(){

        $accomodations = accomodations::all();

        return view('accomodations',[
            'accomodations' => $accomodations,
            'title' => 'Accomodations'
        ]);
    }
}
