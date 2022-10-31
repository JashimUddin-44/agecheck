<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class agemiddleware
{

    public function handle(Request $request, Closure $next){  
            if($request->input('age')>18 && $request->input('class')>10){
            return redirect('allowed'); 
        }
         return $next($request);
    }
}
