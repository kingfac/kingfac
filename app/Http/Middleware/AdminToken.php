<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminToken
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
       if($request->input('token') !== '333') {
           return redirect('client');
       }
        return $next($request);
    }
}
