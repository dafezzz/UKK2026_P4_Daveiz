<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // 🔥 TAMBAH INI

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // cek login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // cek role
        if (!in_array(Auth::user()->role, $roles)) {
            abort(403, 'Akses ditolak');
        }

        return $next($request);
    }
}