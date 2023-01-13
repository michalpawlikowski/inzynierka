<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;


class AddCitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        $numberprofil = $request->numberprofil;
        $miasto = $request->miasto;
        $ulica = $request->ulica;
        $numerulicy = $request->numerulicy;
        $numertelefonu = $request->numertelefonu;

        DB::table('offeraddres')->insert(
            array(
                   'offer_id'     =>   $numberprofil,
                   'miasto_id' => $miasto,
                   'ulica' => $ulica,
                   'numerulicy' => $numerulicy,
                   'telefon' => $numertelefonu
                   
            )
       );

        $userId = Auth::id();

        $listcities = DB::table('miasta')
            ->select('miasta.*')
            ->get();




            $location = DB::table('offeraddres')
            ->join('miasta', 'miasto_id', '=', 'miasta.id')
            ->select('offeraddres.*','miasta.nazwa as miasto')
            ->where('offer_id',$numberprofil)
            ->get();



                //return view('addlocation', ['numberprofil' => $numberprofil, 'listcities' => $listcities, 'location' => $location]);
                return redirect('/editprofil/addlocation/'.$numberprofil);
            }
        
    
}
