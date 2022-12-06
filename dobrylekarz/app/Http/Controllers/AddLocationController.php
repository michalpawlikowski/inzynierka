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
                return view('addlocation', ['numberprofil' => $numberprofil]);
            }
            else
            {
                return redirect()->route('home');
            }
    }
}
