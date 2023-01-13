<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ListUserActivatedDeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {
            $numberuser=$request->numberuser;

            $deleted = DB::table('users')
            ->where('id', $numberuser)
            ->delete();
            
            return redirect('/adminpanel/listuseractivated');
        }
        else
        {
            //return view('welcome');
            return redirect('/');
        }


    }
}
