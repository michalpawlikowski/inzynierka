<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteDaysUserController extends Controller
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
            $del=$request->del;


            $deleted = DB::table('days')
            ->where('id', $del)
            ->delete();

         


       return redirect('/editprofil/addlocation/adddays/'.$numberaddres);
          // return view('adddays', ['days' => $days,'offer' => $offer]);
      


    
}
}

}