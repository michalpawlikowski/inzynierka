<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SaveServicesUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
            $numberaddres = $request->numberaddres;
            $services = $request->services; 
            $cena = $request->cena; 

            DB::table('offerservices')->insert(
                array(
                       'offer_addres_id'     =>   $numberaddres,
                       'usluga_id' => $services,
                       'cena' => $cena
                       
                )
           );

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
}

