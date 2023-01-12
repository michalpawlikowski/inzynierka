<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ListSpecializationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if(Auth::user()->status == 1)
        {

            $listspecializations = DB::table('specializations')
            ->select('specializations.*')
            ->get();


            return view('listspecializations', ['listspecializations' => $listspecializations]);
        }
        else
        {
           // return view('welcome');
           return redirect('/');
        }


    }
}
