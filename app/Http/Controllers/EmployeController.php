<?php

namespace App\Http\Controllers;
use App\Models\employe;
use App\Models\courrier_employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function show(){
        $employes = employe::all() ;
        return view('afficher_utilisateur',['employes'=>$employes,'nom'=>'zouhri aya']);
    }

    public function employePage(){
       
        return view('employe');
    }
    
    public function verifier_travail(Request $request) {
        $travail = $request->input('realisation');
        $id = $request->query('id');
        
        if (!empty($travail)) {
            $courrier = courrier_employe::find($id);
            
            if ($courrier) {
                $courrier->activ = 1;
                $courrier->save();
                return redirect()->back()->with('message1', 'La réalisation a été envoyée avec succès.');
            } else {
                return redirect()->back()->with('message2', 'Courrier non trouvé.');
            }
        } else {
            return redirect()->back()->with('message2', 'Vous n\'avez aucune réalisation.');
        }
    }}