<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthUser
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('user')->check()) {
            return $next($request);
        }
        return redirect()->route('login-user')->withErrors('Anda belum login! silahkan login');
    }

}


