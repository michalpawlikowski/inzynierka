<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ListUserActivatedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if(Auth::user()->status == 1)
        {

            $listusers = DB::table('users')
            ->select('users.*')
            ->where('activated',0)
            ->get();


            return view('listuseractivated', ['listusers' => $listusers]);
        }
        else
        {
           // return view('welcome');
           return redirect('/');
        }


    }
}
