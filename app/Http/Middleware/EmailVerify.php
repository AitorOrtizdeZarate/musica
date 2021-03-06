<?php

namespace App\Http\Middleware;

use Closure;

class EmailVerify
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
        if(auth()->user()->hasVerifiedEmail()){
            return $next($request);
        }
        else{
            return redirect()->route('verify');
        }
        
    }
}
