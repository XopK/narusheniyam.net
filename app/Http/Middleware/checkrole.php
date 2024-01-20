<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->role()->where('title_role', '=', $role)->exists()) {
                return $next($request);
            }
        }

        abort(403, 'У вас недостаточно прав!');
    }
}
