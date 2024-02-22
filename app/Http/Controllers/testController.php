<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
   
    public function pageUsers(){
        return view('exo2.users',
        
        [ 
            'users' => [
                "Michell",
                "José",
                9
                ]
        ]
    );
    }

}