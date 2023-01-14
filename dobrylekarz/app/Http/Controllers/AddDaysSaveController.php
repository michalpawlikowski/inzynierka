<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AddDaysSaveController extends Controller
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
            $dzien=$request->dzien;
            $od=$request->od;
            $do=$request->do;



           DB::table('days')->insert(
            array(
                   'offer_addres_id'     =>   $numberaddres,
                   'dzien' => $dzien,
                   'od' => $od,
                   'do' => $do
                   
            )
       );


       return redirect('/editprofil/addlocation/adddays/'.$numberaddres);
          // return view('adddays', ['days' => $days,'offer' => $offer]);
      


    
}
}

}