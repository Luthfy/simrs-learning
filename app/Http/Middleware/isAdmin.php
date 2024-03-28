<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('web')->check()) {

            if (Auth::guard('web')->users()->role == 'admin') {
                return redirect('/app/admin');
            } else if (Auth::guard('web')->users()->role == 'member') {
                return redirect('/app/member');
            } else {
                return redirect('403');
            }

        }

        return $next($request);
    }
}
