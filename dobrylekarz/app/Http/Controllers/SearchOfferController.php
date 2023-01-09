<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SearchOfferController extends Controller

{

    public function index(Request $request)
    {
        
        $number = $request->number;


        $userId = Auth::id();

            $listoffer = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('users', 'users_id', '=', 'users.id')
            ->join('offeraddres', 'offer.id', '=', 'offer_id')

            ->join('miasta', 'offeraddres.miasto_id', '=', 'miasta.id')
            ->select('offer.*', 'specializations.name as specializations', 'users.name as name1', 'users.surname as surname1', 'miasta.*', 'offeraddres.*')
            ->where('offer.id',$number)
            ->get();


          


            $userinfo = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('users', 'users_id', '=', 'users.id')
            ->select('offer.*', 'specializations.name as specializations', 'users.name as name1', 'users.surname as surname1')
            ->where('offer.id',$number)
            ->get();


            return view('searchoffer', ['listoffer' => $listoffer, 'userinfo' => $userinfo]);
        


    }
}
