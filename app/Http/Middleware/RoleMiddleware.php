<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!auth()->user() || !auth()->user()->hasRole($role)) {
            // Si no tiene el rol, redirige o muestra un error
            return redirect('/home'); // O puedes usar abort(403) para acceso denegado
        }
        return $next($request);
    }
}
