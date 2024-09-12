<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class GuestAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth::check() && auth::user()->is_admin){
            return redirect()->route('admin.home');
        }
        if(auth::check() && !auth::user()->is_admin){
            return redirect()->route('user.home');
        }
        return $next($request);
    }
}
