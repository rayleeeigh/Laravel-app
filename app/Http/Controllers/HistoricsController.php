<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historics;

class HistoricsController extends Controller
{
    public function show(){

        $historics = historics::all();

        return view('historics',[
            'historics' => $historics,
            'title' => 'Historical Sites'
        ]);
    }
}
