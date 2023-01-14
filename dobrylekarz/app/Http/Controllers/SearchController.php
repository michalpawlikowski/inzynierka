<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SearchController extends Controller

{

    public function index(Request $request)
    {
        $specializations = $request->specializations;
        $city = $request->city;


        $userId = Auth::id();

        
            $listoffer = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('users', 'users_id', '=', 'users.id')
            ->join('offeraddres', 'offer.id', '=', 'offer_id')
            ->join('miasta', 'offeraddres.miasto_id', '=', 'miasta.id')
            ->select('offer.*', 'specializations.name as specializations', 'users.name as name1', 'users.surname as surname1', 'miasta.*', 'offeraddres.*', 'offer.id as id1', 'users.id as iksde')
            ->where('offer.status',0)
            ->where('specializations_id',$specializations)
            ->where('miasto_id',$city)
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
