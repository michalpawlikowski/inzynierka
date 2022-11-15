<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $namespecializations = DB::table('specializations')->get();
        $userId = Auth::id();
        $ofertalista = DB::table('oferta')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->join('miasta', 'miasto_id', '=', 'miasta.id')
            ->select('oferta.*', 'specializations.nazwa as specjalizacje', 'miasta.nazwa as miasta')
            ->where('users_id',$userId)
            ->get();


        
        return view('home', ['specializations' => $namespecializations], ['oferta' => $ofertalista]);
        
    }

    public function indexadd(Request $request)
    {
        $namespecializations = DB::table('specializations')->get();

        $specjalizacja = $request->specjalizacja; 
        $miasto = $request->miasto; 
        $userId = Auth::id();

        DB::table('oferta')->insert(
            array(
                   'users_id'     =>   $userId, 
                   'specializations_id'   =>  $specjalizacja ,
                   'miasto_id'   =>   $miasto
            )
       );
        
       return redirect()->route('home');


        
    }


    


}
