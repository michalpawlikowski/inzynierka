<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class EditProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if(Auth::user()->activated == 0)
        {
            return redirect('/');
        }
else
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

        $description = DB::table('offer')
            ->select('description')
            ->where('id',$numberprofil)
            ->get();
           
            foreach ($description as $description)
            {
                $description=$description->description;
            }
            //$specializations = DB::table('specializations')->get();
            if($userprofil==$userId)
            {
                return view('editprofil', ['userprofil' => $userprofil, 'numberprofil' => $numberprofil, 'description' => $description]);
            }
            else
            {
                return redirect()->route('home');
            }
            



        
    }
}
}