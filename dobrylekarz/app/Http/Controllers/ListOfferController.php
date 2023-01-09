<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ListOfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if(Auth::user()->status == 1)
        {

            $listoffer = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('users', 'users_id', '=', 'users.id')
            ->select('offer.*', 'specializations.name as specializations', 'users.name as name1', 'users.surname as surname1')
            ->where('offer.status',0)
            ->get();


            return view('listoffer', ['listoffer' => $listoffer]);
        }
        else
        {
            return view('welcome');
        }


    }
}
