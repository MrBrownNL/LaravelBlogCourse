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
        $user = Auth::user();

        // Check role of user and redirect
        if (!$user->isAdmin()) {

            return redirect('/');

        }

        // Passing al checks, allowed to comntinue
       return $next($request);
    }
}
