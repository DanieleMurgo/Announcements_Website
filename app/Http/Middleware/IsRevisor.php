<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsRevisor
{
    
    public function handle(Request $request, Closure $next){
        if (Auth::check() && Auth::user()->is_revisor) {
        return $next($request);
        }
        return redirect ('/')->with('acces.denied', 'Attenzione!Solo i revisori hanno accesso a quest\'area.');
    }
        
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
}
