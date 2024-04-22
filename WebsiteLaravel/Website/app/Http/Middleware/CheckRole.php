<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        // Check if the user is authenticated
        if (!$request->user()) {
            return redirect()->route('login'); // Redirect to login page if not authenticated
        }

        // Check if the user has any of the required roles
        foreach ($roles as $role) {
            if ($request->user()->hasRole($role)) {
                return $next($request); // User has the required role, allow access
            }
        }

        abort(403, 'Unauthorized action.'); // User does not have the required role, deny access
    }
}
