<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         // authorization
        //  w/username
        //  if(!auth()->check() || auth()->user()->username !=='hamz') {
        //     abort(403);
        // }
        // w/database
        if(!auth()->check() || !auth()->user()->role) {
            abort(403);
        }

        return $next($request);
    }
}
