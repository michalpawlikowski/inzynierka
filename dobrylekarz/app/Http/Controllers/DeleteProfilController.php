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
    $numerofferaddres=0;
    $number = $request->numberprofil; 
    $deleted = DB::table('offer')
    ->where('id', $number)
    ->delete();


    $numeradresu = DB::table('offeraddres')
    ->select('id')
    ->where('offer_id',$number)
    ->get();
    foreach ($numeradresu as $numeradresu)
    {
        $numerofferaddres=$numeradresu->id;
        
    }
    if($numerofferaddres==0)
        {
            $numerofferaddres=0;
        }
    $deleted3 = DB::table('offerservices')
            ->where('offer_addres_id', $numerofferaddres)
            ->delete();



    $deleted2 = DB::table('offeraddres')
    ->where('offer_id', $number)
    ->delete();
    

    return redirect()->route('home');

    }
}
