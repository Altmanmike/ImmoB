<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // verifier video surement pas correcte
        if(Auth::user())
        {
            //die('AUTHENTICATED');
            return $next($request);
        }
        else
        {
            //die('NOT AUTHENTICATED');
            return redirect()->route('login');
        }       
        
    }
}