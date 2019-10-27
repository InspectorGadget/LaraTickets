<?php

namespace App\Http\Middleware;

use Closure;

class isGuest
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
        if (auth()->user()->role == 1) {
            return $next($request);
        } else {
            return back()->with('error', 'You have no access to this Page');
        }
    }
}
