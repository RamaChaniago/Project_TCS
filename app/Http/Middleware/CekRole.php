<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CekRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        Log::info('CekRole Middleware executing', [
            'user' => $request->user() ? $request->user()->role : 'guest',
            'roles' => $roles,
            'path' => $request->path(),
            'method' => $request->method(),
        ]);

        // Check if user is authenticated
        if (!auth()->check()) {
            Log::info('CekRole: User not authenticated, redirecting to login');
            return redirect('/login');
        }

        // Check if user role is allowed
        if (in_array($request->user()->role, $roles)) {
            Log::info('CekRole: Access granted', [
                'user_role' => $request->user()->role,
                'path' => $request->path()
            ]);
            return $next($request);
        }

        // User is authenticated but has incorrect role - redirect to appropriate dashboard
        $userRole = strtolower($request->user()->role);
        $redirect = "/{$userRole}";
        
        Log::info('CekRole: Access denied, redirecting to role-specific dashboard', [
            'user_role' => $request->user()->role,
            'redirect' => $redirect
        ]);
        
        return redirect($redirect);
    }
}