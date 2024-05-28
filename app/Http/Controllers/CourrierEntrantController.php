<?php

namespace App\Http\Controllers;

use App\Models\entrant;
use Illuminate\Http\Request;

class CourrierEntrantController extends Controller
{
    public function show(){
        $list =entrant::where('active',0)->get();
        return view('entrant',['entrants'=>$list]);
    }

    public function supprimer(Request $request ){
        $id_entrant = $request->query('id');
        $courrier = entrant::where('id',$id_entrant)->first();
        $courrier->active = 1;
        $courrier->save();
        return redirect()->back();
    }
}
