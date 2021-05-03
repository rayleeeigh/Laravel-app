<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bucketlist;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $user = User::where('name','=',$name)->first();
        $bucketlist = bucketlist::where('user_id','=',$user->id)
        ->get();

        return view('profile',[
            'title' => $user->name,
            'bucketlist' => $bucketlist
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id)->first();
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
        $user = User::where('id',$id)
            ->update([
                'name' => $request->input('name'),
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'biography' => $request->input('biography'),
                'password' => Hash::make($request->input('password'))
            ]);
        $name = User::find($id)->first();
        
        return redirect('/profile/'.$name->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bucketlist= bucketlist::where('bucketID',$id)->first();
        $user = User::where('id',$bucketlist->user_id)->first();
        $param = $user->name;

        $bucketlist->delete();

        return redirect('/profile/'.$param);
    }
}
