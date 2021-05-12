<?php

namespace App\Http\Controllers;

use App\Models\accomodations;
use App\Models\adventures;
use App\Models\historics;
use App\Models\foods;
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

        $resacc = bucketlist::where('user_id','=',$user->id)->where('category','=','Accomodation')->get('item');
        $bucketuseracc = bucketlist::where('user_id','=',$user->id)->where('category','=','Accomodation')->get();
        $arrayacc= $resacc->toArray();
        $bucketacc = accomodations::whereIn('accID',$arrayacc)->get();

        $resadv = bucketlist::where('user_id','=',$user->id)->where('category','=','Adventure')->get('item');
        $bucketuseradv = bucketlist::where('user_id','=',$user->id)->where('category','=','Adventure')->get();
        $arrayadv= $resadv->toArray();
        $bucketadv = adventures::whereIn('advID',$arrayadv)->get();

        $reshis = bucketlist::where('user_id','=',$user->id)->where('category','=','Historic')->get('item');
        $bucketuserhis = bucketlist::where('user_id','=',$user->id)->where('category','=','Historic')->get();
        $arrayhis= $reshis->toArray();
        $buckethis = historics::whereIn('hisID',$arrayhis)->get();

        $resfood = bucketlist::where('user_id','=',$user->id)->where('category','=','Foods')->get('item');
        $bucketuserfood = bucketlist::where('user_id','=',$user->id)->where('category','=','Foods')->get();
        $arrayfood= $resfood->toArray();
        $bucketfood = foods::whereIn('foodID',$arrayfood)->get();

        return view('profile',[
            'title' => $user->name,
            'bucketacc' => $bucketacc,
            'bucketadv' => $bucketadv,
            'buckethis' => $buckethis,
            'bucketfood' => $bucketfood,
            'bucketuseracc' => $bucketuseracc,
            'bucketuseradv' => $bucketuseradv,
            'bucketuserhis' => $bucketuserhis,
            'bucketuserfood' => $bucketuserfood
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
        $imageName = $request->input('fullname').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('storage/Profile'),$imageName);

        $user = User::where('id',$id)
            ->update([
                'name' => $request->input('name'),
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'biography' => $request->input('biography'),
                'password' => Hash::make($request->input('password')),
                'image' => $imageName
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
