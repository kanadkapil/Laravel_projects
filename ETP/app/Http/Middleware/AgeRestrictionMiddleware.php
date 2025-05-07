<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AgeRestrictionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $age = session('age') ?? $request->input('age');

        // Optionally restrict globally
        if ($age !== null && $age < 18 && $request->path() !== '/') {
            return redirect('/');
        }

        return $next($request);
    }
}
