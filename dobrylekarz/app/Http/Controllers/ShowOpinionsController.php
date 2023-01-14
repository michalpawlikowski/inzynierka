<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class ShowOpinionsController extends Controller
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
            $opinions = DB::table('opinions')
            ->select('opinions.*')
            ->where('users_id',$numberuser)
            ->get();


            return view('listopinions', ['opinions' => $opinions, 'numberuser' => $numberuser]);
        }
        else
        {
           // return view('welcome');
           return redirect('/');
        }


    }
}
