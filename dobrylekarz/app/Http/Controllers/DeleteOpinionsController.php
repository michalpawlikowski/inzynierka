<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteOpinionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {

            $numberuser = $request->numberuser; 
            $numberopinion = $request->numberopinion; 

         
 
            $deleted = DB::table('opinions')
            ->where('id', $numberopinion)
            ->delete();

     
            return redirect('/adminpanel/listuser/opinions/'.$numberuser);
           
        }
        else
        {
            //return view('welcome');
            return redirect('/');
        


    }
}
}

