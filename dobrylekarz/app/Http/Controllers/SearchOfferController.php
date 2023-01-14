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
            ->orderBy('miasta.nazwa', 'asc')
            ->get();

            $idus = DB::table('offer')
            ->select('users_id')
            ->where('offer.id',$number)
            ->limit(1)
            ->get();

            foreach ($idus as $idus)
            {
                $iduser=$idus->users_id;
            }

            $userinfo = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('users', 'users_id', '=', 'users.id')
            ->select('offer.*', 'specializations.name as specializations', 'users.name as name1', 'users.surname as surname1')
            ->where('offer.id',$number)
            ->get();


            $servicesoffer = DB::table('offer')
            ->join('offeraddres', 'offer.id', '=', 'offer_id')
            ->join('offerservices', 'offeraddres.id', '=', 'offerservices.offer_addres_id')
            ->join('services', 'offerservices.usluga_id', '=', 'services.id')
            ->select( 'services.name as usluga', 'offerservices.offer_addres_id as adres', 'offerservices.cena as cena')
            ->where('offer.id',$number)
            ->get();

            $oceny = DB::table('opinions')
            ->select('opinions.*')
            ->where('users_id',$iduser)
            ->get();

            $srednia = DB::table('opinions')
            ->select('users_id',DB::raw('round(AVG(ocena),1) as ocena'))
            ->where('users_id',$iduser)
            ->get();

            return view('searchoffer', ['listoffer' => $listoffer, 'userinfo' => $userinfo, 'servicesoffer' => $servicesoffer, 'iduser' => $iduser, 'number' => $number, 'oceny' => $oceny, 'srednia' => $srednia]);
        


    }
}
