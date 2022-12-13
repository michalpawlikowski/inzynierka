<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        if(Auth::user()->status == 1)
        {
            return view('adminpanel');
        }
        else
        {
            return view('welcome');
        }


    }
}
