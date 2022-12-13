<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {

            $numberservices = $request->numberservices; 

            $numberspecializations = DB::table('services')
            ->select('specializations_id')
            ->where('id',$numberservices)
            ->get();
            foreach ($numberspecializations as $numberspecializations)
            {
                $numberspecializations=$numberspecializations->specializations_id;
            }
 
            $deleted = DB::table('services')
            ->where('id', $numberservices)
            ->delete();

            $listservices = DB::table('services')
            ->select('services.*')
            ->where('specializations_id',$numberspecializations)
            ->get();


            return view('listservices', ['numberspecializations' => $numberspecializations,'listservices' => $listservices]);

           
        }
        else
        {
            return view('welcome');
        


    }
}
}

