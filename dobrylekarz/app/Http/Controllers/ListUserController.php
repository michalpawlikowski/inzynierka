<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ListUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if(Auth::user()->status == 1)
        {

            $listuser = DB::table('users')
            ->select('users.*')
            ->get();


            return view('listuser', ['listuser' => $listuser]);
        }
        else
        {
            //return view('welcome');

            return redirect('/');
        }


    }
}
