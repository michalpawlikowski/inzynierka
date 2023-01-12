<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteUserController extends Controller
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
            
            return redirect('/adminpanel/listuser');
        }
        else
        {
            //return view('welcome');
            return redirect('/');
        }


    }
}
