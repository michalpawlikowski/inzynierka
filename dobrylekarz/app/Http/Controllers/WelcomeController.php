<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $miasta = DB::table('miasta')
            ->select('miasta.*')
            ->orderBy('miasta.nazwa', 'asc')
            ->get();

            $woje = DB::table('woje')
            ->select('woje.*')
            ->orderBy('woje.nazwa', 'asc')
            ->get();

        $specializations = DB::table('specializations')
            ->select('specializations.*')
            ->get();




        

        return view('welcome', ['miasta' => $miasta,'specializations' => $specializations, 'woje' => $woje]);

    }
}
