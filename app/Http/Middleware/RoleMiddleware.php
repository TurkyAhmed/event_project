<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{

    public function handle(Request $request, Closure $next, string $role)
    {
        if (!$request->user()->hasRole($role)) {
            return redirect('/'); // Redirect to home page or show an error message
        }
        return $next($request);
    }

}
