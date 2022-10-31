<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agecontroller extends Controller
{
    function age(Request $request){
        $data = [
            'age'=>$request->input('age')??'',
            'class'=>$request->input('class')??''
        ];

        return view('welcome',$data);
    }
}
