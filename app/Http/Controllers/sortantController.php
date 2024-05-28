<?php

namespace App\Http\Controllers;
use App\Models\courrier_employe;
use Illuminate\Http\Request;

class sortantController extends Controller
{
    public function affichage(Request $request){
        
        $liste = courrier_employe::where('activ',1)->get();

        return view('Sortant',['liste'=>$liste]);
    }
}
