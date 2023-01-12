<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteServicesUserController extends Controller
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
        $numberservicesdelete=$request->opis;
        $deleted = DB::table('offerservices')
        ->where('id', $numberservicesdelete)
        ->delete();


           $numberofferaddress = DB::table('offeraddres')
           ->select('offer_id')
           ->where('id',$numberaddres)
           ->get();
           foreach ($numberofferaddress as $numberofferaddress)
           {
               $numeroferty=$numberofferaddress->offer_id;
           }
           $numberoffer = DB::table('offer')
           ->select('specializations_id')
           ->where('id',$numeroferty)
           ->get();

           foreach ($numberoffer as $numberoffer)
           {
               $numerspecjalizacji=$numberoffer->specializations_id;
           }
           $listservices = DB::table('services')
           ->select('services.*')
           ->where('specializations_id',$numerspecjalizacji)
           ->get();

           $opis = DB::table('offerservices')
            ->join('services', 'usluga_id', '=', 'services.id')
            ->select('offerservices.*','services.name as name')
            ->where('offer_addres_id',$numberaddres)
            ->get();



           //return view('addservicesuser', ['listservices' => $listservices, 'numberaddres' => $numberaddres, 'opis' => $opis]);
           return redirect('/editprofil/addlocation/addservices/'.$numberaddres);
      


    
}
}}

