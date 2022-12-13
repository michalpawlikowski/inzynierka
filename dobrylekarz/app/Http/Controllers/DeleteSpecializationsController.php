<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteSpecializationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {

            $numberspecializations = $request->numberspecializations; 

            $deleted = DB::table('specializations')
            ->where('id', $numberspecializations)
            ->delete();
            //kasowanie uslug
            $deleted1 = DB::table('services')
            ->where('specializations_id', $numberspecializations)
            ->delete();

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

