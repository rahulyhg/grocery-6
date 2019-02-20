<?php

namespace App\Http\Controllers;

use \Illuminate\Routing\Controller;

class MiController extends Controller{
    
    public function index(){
        
        $people=\App\Models\Usuarios::all();
        
        foreach($people as $person){
            echo $person->NOMBRE.'<br>';
            
        }
        
    }
}
