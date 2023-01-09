<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class AddLocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        $numberprofil = $request->numberprofil;
        $userId = Auth::id();

        $testuser = DB::table('offer')
            ->select('users_id')
            ->where('id',$numberprofil)
            ->get();
            foreach ($testuser as $testuser)
            {
                $userprofil=$testuser->users_id;
            }
            if($userprofil==$userId)
            {
                $listcities = DB::table('miasta')
            ->select('miasta.*')
            ->orderBy('miasta.nazwa', 'asc')
            ->get();
            
            $location = DB::table('offeraddres')
            ->join('miasta', 'miasto_id', '=', 'miasta.id')
            ->select('offeraddres.*','miasta.nazwa as miasto')
            ->where('offer_id',$numberprofil)
            ->get();



                return view('addlocation', ['numberprofil' => $numberprofil, 'listcities' => $listcities, 'location' => $location]);
            }
            else
            {
                return redirect()->route('home');
            }
    }
}
