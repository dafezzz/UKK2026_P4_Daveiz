<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // cek login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // cek role
        $userRole = Auth::user()->role;
        
        // debug log
        \Log::info('RoleMiddleware Check', [
            'user_id' => Auth::id(),
            'user_role' => $userRole,
            'required_roles' => $roles,
            'path' => $request->path()
        ]);

        if (!in_array($userRole, $roles)) {
            \Log::warning('Access Denied', [
                'user_id' => Auth::id(),
                'user_role' => $userRole,
                'required_roles' => $roles,
                'path' => $request->path()
            ]);
            abort(403, 'Akses ditolak. Role Anda: ' . $userRole);
        }

        return $next($request);
    }
}