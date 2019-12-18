<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
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
        // 1. User should be authenticated
        if(Sentinel::check())
        {
            return $next($request);            
        }
        else
        {
            return redirect('/masuk');
        }

        // 2. Authenticated user should be an admin
    }
}
