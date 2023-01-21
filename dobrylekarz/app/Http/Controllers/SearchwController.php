<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SearchwController extends Controller

{

    public function index(Request $request)
    {
        $specializations = $request->specializations;
        $woje = $request->woje;


        $userId = Auth::id();

        
            $listoffer = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('users', 'users_id', '=', 'users.id')
            ->join('offeraddres', 'offer.id', '=', 'offer_id')
            ->join('miasta', 'offeraddres.miasto_id', '=', 'miasta.id')
            ->join('woje', 'woje.id', '=', 'miasta.woj_id')
            ->select('offer.*', 'specializations.name as specializations', 'users.name as name1', 'users.surname as surname1', 'miasta.*', 'offeraddres.*', 'offer.id as id1', 'users.id as iksde','woje.nazwa as woje','miasta.nazwa as miasto')
            ->where('offer.status',0)
            ->where('specializations_id',$specializations)
            ->where('woje.id',$woje)
            ->distinct('offer.offer_id')
            ->groupBy('offeraddres.offer_id')
            ->get();

            $ocena = DB::table('opinions')
            ->select('users_id',DB::raw('round(AVG(ocena),1) as ocena'))
            ->groupBy('users_id')
            ->get();
            


            return view('search', ['listoffer' => $listoffer, 'ocena' => $ocena]);
        


    }
}
