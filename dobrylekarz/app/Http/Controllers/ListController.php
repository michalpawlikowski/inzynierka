<?php

namespace App\Http\Controllers;
USE DB;
use auth;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(Request $request)
    {
        $namespecializations = DB::table('specializations')->get();
        $userId = Auth::id();

        $specjalizacja = $request->specjalizacja; 
        $miasto = $request->miasto; 


        $listalekarzy = DB::table('oferta')
            ->join('users', 'users_id', '=', 'users.id')
            ->join('miasta', 'miasto_id', '=', 'miasta.id')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->select('oferta.*', 'users.*', 'specializations.nazwa as specjalizacja', 'miasta.nazwa as miasto')
            ->where('miasta.nazwa',$miasto)
            ->where('specializations.nazwa',$specjalizacja)
            ->get();


        
        return view('list', ['listalekarzy' => $listalekarzy]);
        
    }
}
