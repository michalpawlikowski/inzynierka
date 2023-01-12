<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class EditUserController extends Controller
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

            $user = DB::table('users')
            ->select('users.*')
            ->where('id',$numberuser)
            ->get();


            return view('edituser', ['user'=>$user]);

            
        }
        else
        {
            //return view('welcome');
            return redirect('/');
        }


    }
}
