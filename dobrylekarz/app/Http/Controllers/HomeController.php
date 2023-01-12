<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
        if(Auth::user()->activated == 0)
        {
            return redirect('/');
        }
else
{
        $userId = Auth::id();

        $offerlist = DB::table('offer')
            ->join('specializations', 'specializations_id', '=', 'specializations.id')
            ->select('offer.*', 'specializations.name as specializations')
            ->where('users_id',$userId)
            ->get();


        return view('home', ['offerlist' => $offerlist]);

    }}

    public function indexadd(Request $request)
    {
        if(Auth::user()->activated == 0)
        {
            return redirect('/');
        }
else
{

        $specializations = $request->specializations; 

        $userId = Auth::id();

        DB::table('offer')->insert(
            array(
                   'users_id'     =>   $userId, 
                   'specializations_id'   =>  $specializations ,
                   'description' => '',
                   'status'   =>   0,
                   'statusAdmin'   =>   0
            )
       );
        
       return redirect()->route('home');
    }
}
}