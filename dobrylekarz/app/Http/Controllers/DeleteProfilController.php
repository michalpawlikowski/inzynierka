<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DeleteProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    $number = $request->numberprofil; 
    $deleted = DB::table('offer')
    ->where('id', $number)
    ->delete();
    

    return redirect()->route('home');

    }
}
