<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class EditUserSaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        
        if(Auth::user()->status == 1)
        {
            $numberuser=$request->numberuser;
            $newname=$request->name;
            $newsurname=$request->surname;
            $newdate=$request->date;
            $newemail=$request->email;

         
            DB::table('users')
            ->where('id', $numberuser)
            ->update(['name' => $newname,'surname' => $newsurname, 'date' => $newdate, 'email' => $newemail]);


            $user = DB::table('users')
            ->select('users.*')
            ->where('id',$numberuser)
            ->get();


            //return view('edituser', ['user'=>$user]);

            return redirect('/adminpanel/listuser/edit/'.$numberuser);
        }
        else
        {
            return view('welcome');
        }


    }
}
