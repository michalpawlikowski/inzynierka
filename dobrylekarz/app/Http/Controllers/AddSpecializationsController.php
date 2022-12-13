<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AddSpecializationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {

            $namespecializations = $request->namespecializations; 

            DB::table('specializations')->insert(
                array(
                       'name'     =>   $namespecializations
                       
                )
           );


            $listspecializations = DB::table('specializations')
            ->select('specializations.*')
            ->get();


            return view('listspecializations', ['listspecializations' => $listspecializations]);
        }
        else
        {
            return view('welcome');
        


    }
}
}

