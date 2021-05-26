<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsSekretaris
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
        if (auth()->user()->is_admin == 4) {
            return $next($request);
        }

        return redirect(‘ / auth / login’)->with(‘error’, "You don't have sekretaris access.");
    }
}
