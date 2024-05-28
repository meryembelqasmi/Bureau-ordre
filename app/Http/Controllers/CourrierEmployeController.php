<?php

namespace App\Http\Controllers;
use App\Models\employe;
use Illuminate\Http\Request;
use App\Models\courrier_employe;
use App\Models\entrant;

class CourrierEmployeController extends Controller

{   
    public function ajouter_courrier_Employe_store(Request $request){
       
        $reference =$request->query('reference');
        $daterecu=$request->query('daterecu');
        $analyse=$request->query('analyse');
        $code=$request->query('code');
        $type_courrier=$request->query('type_courrier');  
        $service=$request->query('service_concerne') ;  
        $id_entrant=$request->query('id_entrant');
        $employ = employe::where('service',$service)->first();
        $id_employe=$employ->id;
        $courrier = entrant::where('id',$id_entrant)->first();
        $courrier->active = 5;
        $courrier->save();

        courrier_employe::create([
            'reference'=> $reference,
            'daterecu'=>$daterecu, 
            'analyse'=> $analyse, 
            'code'=>$code,
            'type_courrier'=>$type_courrier,
            'service'=>$service,
            'id_entrant'=>$id_entrant,
            'id_employe'=>$id_employe,
        ]);

        return redirect()->back()->with('success', 'Courrier affecté avec succès');
    }

}


