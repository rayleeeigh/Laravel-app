<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accomodations;
use App\Models\adventures;
use App\Models\foods;
use App\Models\historics;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->accountType == 'REGULAR'){
            return redirect('/');
        }

        else{
            $accomodations = accomodations::all();
            $adventures = adventures::all();
            $historics = historics::all();
            $foods = foods::all();

            return view('admin',[
                'accomodations' => $accomodations,
                'adventures' => $adventures,
                'foods' => $foods,
                'historics' => $historics,
                'title' => 'Admin Page'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accomodations= accomodations::where('accID',$id)->first();
        $adventures= adventures::where('advID',$id)->first();
        $historics= historics::where('hisID',$id)->first();
        $foods= foods::where('foodID',$id)->first();
        
        if (!empty($accomodations)){
            $accomodations->delete();
        }
        else if(!empty($adventures)){
            $adventures->delete();
        }
        else if(!empty($historics)){
            $adventures->delete();
        }
        else if(!empty($foods)){
            $adventures->delete();
        }

        return redirect('/admin');
    }
}
