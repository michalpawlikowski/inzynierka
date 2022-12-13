<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SettingsSaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $newname=$request->name;
        $newsurname=$request->surname;
        $newdate=$request->date;
        $userId = Auth::id();

        DB::table('users')
        ->where('id', $userId)
        ->update(['name' => $newname,'surname' => $newsurname, 'date' => $newdate]);



            $user = DB::table('users')
            ->select('users.*')
            ->where('id',$userId)
            ->get();


            
            return redirect()->route('settings');
        


    }
}
