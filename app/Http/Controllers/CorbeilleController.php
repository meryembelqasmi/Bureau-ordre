<?php

namespace App\Http\Controllers;
use App\Models\entrant;
use Illuminate\Http\Request;

class CorbeilleController extends Controller
{
    public function show(){
      
            $list = entrant::where('active',1)->get();
            return view('corbeille',['corbeille'=>$list]);
        
    }

    public function vider(){
      
        $list = entrant::where('active',1)->get();
       
        foreach ($list as $courrier) {
            $courrier->active = 3;
            $courrier->save();
        }
        
      
        return view('corbeille',['corbeille'=>$list]);
    
}
}
