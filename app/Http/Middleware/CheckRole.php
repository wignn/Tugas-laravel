<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
        /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        
        // Cek jika user memiliki salah satu role yang diizinkan
        if (!in_array($user->role, $roles)) {
            abort(403, 'Unauthorized. Only ' . implode(' and ', $roles) . ' can access this page.');
        }

        return $next($request);
    }
}
