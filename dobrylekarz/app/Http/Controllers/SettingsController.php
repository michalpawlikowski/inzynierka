<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $userId = Auth::id();

            $user = DB::table('users')
            ->select('users.*')
            ->where('id',$userId)
            ->get();


            return view('settings', ['user' => $user]);
        


    }
}
