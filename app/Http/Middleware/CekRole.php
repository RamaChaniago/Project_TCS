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

        if (auth()->check() && in_array($request->user()->role, $roles)) {
            Log::info('CekRole: Access granted', ['path' => $request->path()]);
            return $next($request);
        }

        if (auth()->check()) {
            $redirect = '/' . strtolower($request->user()->role);
            Log::info('CekRole: Redirecting to role-specific dashboard', [
                'role' => $request->user()->role,
                'redirect' => $redirect,
            ]);
            return redirect($redirect);
        }

        Log::info('CekRole: Redirecting to login');
        return redirect('/login');
    }
}
