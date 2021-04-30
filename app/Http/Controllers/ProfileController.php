<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show(){

        // $user = User::all();

        // return view('foods',[
        //     'user' => $user,
        //     'title' => 'Profile'
        // ]);

            return view('profile',[
                'title' => 'Profile'
            ]);
    }
}