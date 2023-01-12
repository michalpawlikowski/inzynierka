<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use Illuminate\Http\Request;

class AddDescriptionController extends Controller
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


            if($userprofil==$userId)
            {
                return view('adddescription', ['numberprofil' => $numberprofil], ['description' => $description]);
            }
            else
            {
                return redirect()->route('home');
            }
        }
    }



    public function indexadd(Request $request)
    {
        if(Auth::user()->activated == 0)
        {
            return redirect('/');
        }
else
{
        $numberprofil = $request->numberprofil;
        $userId = Auth::id();
        $description= $request->description;

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
                DB::table('offer')
            ->where('id', $numberprofil)
            ->update(['description' => $description]);

                return redirect()->route('editprofil', ['numberprofil' => $numberprofil]);
                
                
            }
            else
            {
                return redirect()->route('home');
            }
    }
}
}
