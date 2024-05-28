<?php

namespace App\Http\Controllers;
use App\Models\employe;
use App\Models\admin;
use App\Models\courrier_employe;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }


    public function verifier_existence(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');

        $employe = employe::where('email',$email)->first();
        $admin = admin::where('email',$email)->first();

      

        if(isset($employe)){
           
            if($employe->password === $pass){
               
                $service = $employe->service;
                $nom = $employe->nom;
                $list = courrier_employe::where('id_employe', $employe->id)
                ->where('activ',0)
                ->get();

                return view('employe',['service'=>$service ,'nom'=>$nom ,'list'=>$list ]);
            }
            else{
                return redirect()->back()->with('warning','mot de passe incorrect');
            }
        }


        if(isset($admin)){
            if($admin->password === $pass){       
                $nom = $admin->nom;
                return view('home',['nom'=>$nom]);
            }
            else{
                return redirect()->back()->with('warning','mot de passe incorrect');
            }
        }

        if(!isset($employe) && !isset($admin) ){
            return redirect()->back()->with('warning','email introuvable');
        }


    }
}