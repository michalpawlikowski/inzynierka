<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AddController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $specializations = DB::table('specializations')->get();
        return view('add', ['specializations' => $specializations]);
    }
}
