<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $iduser = $request->iduser; 
        if(Auth::user()->id == $iduser)
        {

            $iduser = $request->iduser; 

 
            $deleted = DB::table('users')
            ->where('id', $iduser)
            ->delete();
            return redirect('/');
           
        }
        else
        {
            //return view('welcome');
            return redirect('/');
        


    }
}
}

