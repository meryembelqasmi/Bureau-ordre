<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notifications;
use App\Models\entrant;

class NotificationsController extends Controller
{
    public function show(){
        $list = notifications::where('active',0)->get();
        return view('notifications',['notifications'=>$list]);
    }

    public function ajouter_courrier_entrant_store(Request $request){
        $reference = $request->query('reference');
        $date_recu=$request->query('date_recu');
        $analyse=$request->query('analyse');
        $nom_entreprise=$request->query('nom_entreprise');
        $code=$request->query('code');
        $service_concerne=$request->query('service_concerne');
        $type_de_courrier=$request->query('type_de_courrier');
        $id_notification=$request->query('id_notification');

        entrant::create([
                        'reference'=>$reference,
                        'date_recu'=>$date_recu,
                        'analyse'=>$analyse,
                        'nom_entreprise'=>$nom_entreprise,
                        'code'=>$code,
                        'service_concerne'=>$service_concerne,
                        'type_de_courrier'=>$type_de_courrier,
                        'id_notification'=>$id_notification,
        ]);
        $ntf = notifications::where('id', $id_notification)->first();
        $ntf->active = 1;
        $ntf->save();
        return redirect()->back()->with('success', 'Courrier ajouté avec succès');
        
    }
}
