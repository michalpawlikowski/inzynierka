<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AddOpinionsController extends Controller
{
    public function index(Request $request)
    {
        $numberaddres = $request->number;
        $iduser = $request->iduser;
        $ocena = $request->ocena;
        $name = $request->name;
        $describe = $request->describe;



        DB::table('opinions')->insert(
            array(
                   'users_id'     =>   $iduser,
                   'user' => $name,
                   'opis' => $describe,
                   'ocena' => $ocena
                   
            )
       );

       
       return redirect('/search/'.$numberaddres);
    }
}
