<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'usuario' && auth()->user()->role_id != 0) {
            abort(403);
        }

        if ($role == 'admin' && auth()->user()->role_id != 1) {
            abort(403);
        }


        return $next($request);
    }
}
