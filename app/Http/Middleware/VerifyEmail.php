<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class erifyEmail
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
        // if (Auth::check() && !Auth::user()->hasVerifiedEmail()) {
        //     return redirect('/email/verify');
        // }
        if (Auth::check()) {
            $user = Auth::user();

            // Memeriksa verifikasi email sesuai dengan peran
            if ($role === 1 && $user->isAdmin() && !$user->hasVerifiedEmail()) {
                return redirect('/email/verify');
            }

            elseif ($role === 2 && $user->isUser() && !$user->hasVerifiedEmail()) {
                return redirect('/email/verify');
            }
        }
        return $next($request);
    }
}
