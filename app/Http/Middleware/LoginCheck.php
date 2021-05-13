<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use 

class LoginCheck
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
        if(Auth::user())
        {
            return $request->path();
        }
        else {
            return route('login');
        }
        return $next($request);
    }
}
