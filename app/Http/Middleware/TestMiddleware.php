<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TestMiddleware
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
        if(!Auth::user()->role == 'admin'){
            
            return redirect()->route('layout');
        }


        return $next($request);
    }
}
