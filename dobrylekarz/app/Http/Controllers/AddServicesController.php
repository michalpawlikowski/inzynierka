<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AddServicesController extends Controller
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
            $nameservices = $request->nameservices; 

            DB::table('services')->insert(
                array(
                       'name'     =>   $nameservices,
                       'specializations_id' => $numberspecializations
                       
                )
           );


           $listservices = DB::table('services')
           ->select('services.*')
           ->where('specializations_id',$numberspecializations)
           ->get();


           //return view('listservices', ['numberspecializations'=>$numberspecializations,'listservices' => $listservices]);

           return redirect('/adminpanel/listspecializations/listservices/'.$numberspecializations);
        }
        else
        {
           // return view('welcome');
           return redirect('/');
        


    }
}
}

