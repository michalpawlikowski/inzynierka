<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ListServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {
            $numberspecializations=$request->numberspecializations;

            $listservices = DB::table('services')
            ->select('services.*')
            ->where('specializations_id',$numberspecializations)
            ->get();


            return view('listservices', ['numberspecializations'=>$numberspecializations,'listservices' => $listservices]);
        }
        else
        {
            return view('welcome');
        }


    }
}
