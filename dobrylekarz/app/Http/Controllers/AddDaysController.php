<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AddDaysController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if(Auth::user()->activated == 0)
        {
            return redirect('/');
        }
else
{
        

            $numberaddres = $request->numberaddres;
            $offer=$request->numberaddres;


           $days = DB::table('days')
           ->select('days.*')
           ->where('offer_addres_id',$numberaddres)
           ->orderBy('dzien', 'asc')
           ->get();

           return view('adddays', ['days' => $days,'offer' => $offer]);
      


    
}
}

}