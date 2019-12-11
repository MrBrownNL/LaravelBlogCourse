<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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

        // First get Auth object of current user
        if ($user = Auth::user()) {

            if (!$user->isAdmin()) {

                return redirect('/home');

            }

            // Passing al checks, allowed to comntinue
            return $next($request);

        } else {
            return redirect('/home');
        }

     }
}
