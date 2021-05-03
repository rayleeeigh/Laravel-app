<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foods;
use App\Models\bucketlist;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = foods::all();

        return view('foods',[
            'foods' => $foods,
            'title' => 'Food Trips'
        ]);
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
        $food = new bucketlist();
        $food->user_id = $request->input('foodID');
        $food->bucketName = $request->input('foodName');
        $food->bucketDesc = $request->input('foodDesc');
        $food->bucketImage = $request->input('foodImage');
        $food->bucketPrice = $request->input('foodPrice');
        $food->bucketCity = $request->input('foodCity');
        $food->bucketContact = $request->input('foodContact');
        $food->bucketEmail = $request->input('foodEmail');
        $food->bucketSite = $request->input('foodSite');
        $food->save();

        return redirect('/services/foods');
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
        //
    }
}
