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
        if ($request->filled('accName')){
            $imageName = $request->input('accName').'.'.$request->file('accImage')->getClientOriginalExtension();
            $request->file('accImage')->move(public_path('storage/Accomodation'),$imageName);

            $accomodation = new accomodations();
            $accomodation->accName = $request->input('accName');
            $accomodation->accDesc = $request->input('accDesc');
            $accomodation->accImage = $imageName;
            $accomodation->accPrice = $request->input('accPrice');
            $accomodation->accCity = $request->input('accCity');
            $accomodation->accContact = $request->input('accContact');
            $accomodation->accEmail = $request->input('accEmail');
            $accomodation->accSite = $request->input('accSite');
            $accomodation->save();
        }

        else if ($request->filled('advName')){
            $imageName = $request->input('advName').'.'.$request->file('advImage')->getClientOriginalExtension();
            $request->file('advImage')->move(public_path('storage/Adventure'),$imageName);

            $adventure = new adventures();
            $adventure->advName = $request->input('advName');
            $adventure->advDesc = $request->input('advDesc');
            $adventure->advImage = $imageName;
            $adventure->advPrice = $request->input('advPrice');
            $adventure->advCity = $request->input('advCity');
            $adventure->advContact = $request->input('advContact');
            $adventure->advEmail = $request->input('advEmail');
            $adventure->advSite = $request->input('advSite');
            $adventure->save();
        }

        else if ($request->filled('foodName')){
            $imageName = $request->input('foodName').'.'.$request->file('foodImage')->getClientOriginalExtension();
            $request->file('foodImage')->move(public_path('storage/Foods'),$imageName);

            $food = new foods();
            $food->foodName = $request->input('foodName');
            $food->foodDesc = $request->input('foodDesc');
            $food->foodImage = $imageName;
            $food->foodPrice = $request->input('foodPrice');
            $food->foodCity = $request->input('foodCity');
            $food->foodContact = $request->input('foodContact');
            $food->foodEmail = $request->input('foodEmail');
            $food->foodSite = $request->input('foodSite');
            $food->save();
        }

        else if ($request->filled('hisName')){
            $imageName = $request->input('hisName').'.'.$request->file('hisImage')->getClientOriginalExtension();
            $request->file('hisImage')->move(public_path('storage/Historic'),$imageName);

            $historic = new historics();
            $historic->hisName = $request->input('hisName');
            $historic->hisDesc = $request->input('hisDesc');
            $historic->hisImage = $imageName;
            $historic->hisPrice = $request->input('hisPrice');
            $historic->hisCity = $request->input('hisCity');
            $historic->hisContact = $request->input('hisContact');
            $historic->hisEmail = $request->input('hisEmail');
            $historic->hisSite = $request->input('hisSite');
            $historic->save();
        }

        return redirect('/admin');
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
        if ($request->filled('accName')){
            $imageName = $request->input('accName').'.'.$request->file('accImage')->getClientOriginalExtension();
            $request->file('accImage')->move(public_path('storage/Accomodation'),$imageName);

            $accomodation = accomodations::where('accID',$id)
            ->update([
                'accName' => $request->input('accName'),
                'accDesc' =>$request->input('accDesc'),
                'accImage' => $imageName,
                'accPrice' => $request->input('accPrice'),
                'accCity' => $request->input('accCity'),
                'accContact' => $request->input('accContact'),
                'accEmail' => $request->input('accEmail'),
                'accSite' => $request->input('accSite')
            ]);
        }
        else if($request->filled('advName')){
            $imageName = $request->input('advName').'.'.$request->file('advImage')->getClientOriginalExtension();
            $request->file('advImage')->move(public_path('storage/Adventure'),$imageName);

            $adventure = adventures::where('advID',$id)
            ->update([
                'advName' => $request->input('advName'),
                'advDesc' =>$request->input('advDesc'),
                'advImage' => $imageName,
                'advPrice' => $request->input('advPrice'),
                'advCity' => $request->input('advCity'),
                'advContact' => $request->input('advContact'),
                'advEmail' => $request->input('advEmail'),
                'advSite' => $request->input('advSite')
            ]);
        }
        else if($request->filled('hisName')){
            $imageName = $request->input('hisName').'.'.$request->file('hisImage')->getClientOriginalExtension();
            $request->file('hisImage')->move(public_path('storage/Historic'),$imageName);

            $historic = historics::where('hisID',$id)
            ->update([
                'hisName' => $request->input('hisName'),
                'hisDesc' =>$request->input('hisDesc'),
                'hisImage' => $imageName,
                'hisPrice' => $request->input('hisPrice'),
                'hisCity' => $request->input('hisCity'),
                'hisContact' => $request->input('hisContact'),
                'hisEmail' => $request->input('hisEmail'),
                'hisSite' => $request->input('hisSite')
            ]);
        }
        else if($request->filled('foodName')){
            $imageName = $request->input('foodName').'.'.$request->file('foodImage')->getClientOriginalExtension();
            $request->file('foodImage')->move(public_path('storage/Foods'),$imageName);

            $food = foods::where('foodID',$id)
            ->update([
                'foodName' => $request->input('foodName'),
                'foodDesc' =>$request->input('foodDesc'),
                'foodImage' => $imageName,
                'foodPrice' => $request->input('foodPrice'),
                'foodCity' => $request->input('foodCity'),
                'foodContact' => $request->input('foodContact'),
                'foodEmail' => $request->input('foodEmail'),
                'foodSite' => $request->input('foodSite')
            ]);
        }

        return redirect('/admin');
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
