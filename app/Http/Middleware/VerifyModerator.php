<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyModerator
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
        $isAuthenticated = Auth::check();
        if($isAuthenticated && Auth::user()->hasRole(User::Administrator)){
            return $next($request);
        }
        return $isAuthenticated ? redirect('/home')->withErrors('Error: Admin access only!')
            : redirect('/')->withErrors('Error: Admin access only!');
    }
}
