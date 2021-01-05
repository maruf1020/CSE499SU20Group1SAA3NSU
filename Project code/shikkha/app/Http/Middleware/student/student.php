<?php

namespace App\Http\Middleware\student;

use Closure;
use Illuminate\Support\Facades\Auth;

class student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role=auth::user()->role;

     if($role==1){
         return $next($request);
     }
     else{
         return redirect('/home');
     }


    }
}
