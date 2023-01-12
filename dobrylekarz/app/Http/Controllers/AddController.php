<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class AddController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        if(Auth::user()->activated == 0)
        {
            return redirect('/');
        }
else
{
        $specializations = DB::table('specializations')->get();
        return view('add', ['specializations' => $specializations]);
}
    }
}
