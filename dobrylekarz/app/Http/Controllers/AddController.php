<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AddController extends Controller
{
    //

    public function index()
    {
        $specjalizacje = DB::table('specializations')->get();
        $miasta = DB::table('miasta')->get();
        return view('add', ['miasta' => $miasta], ['specjalizacje' => $specjalizacje]);
        
    }
}
