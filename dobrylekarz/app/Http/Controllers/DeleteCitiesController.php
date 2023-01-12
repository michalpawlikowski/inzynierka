<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;


class DeleteCitiesController extends Controller
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
        $numberprofil = $request->numberprofil;
        $location = $request->location;
 
 
  

        $userId = Auth::id();

        $listcities = DB::table('miasta')
            ->select('miasta.*')
            ->get();

        $deleted = DB::table('offeraddres')
            ->where('id', $location)
            ->delete();

            $deleted2 = DB::table('offerservices')
            ->where('offer_addres_id', $location)
            ->delete();

            $location = DB::table('offeraddres')
            ->join('miasta', 'miasto_id', '=', 'miasta.id')
            ->select('offeraddres.*','miasta.nazwa as miasto')
            ->where('offer_id',$numberprofil)
            ->get();



                //return view('addlocation', ['numberprofil' => $numberprofil, 'listcities' => $listcities, 'location' => $location]);
                return redirect('/editprofil/addlocation/'.$numberprofil);
            }
        
    
}
}