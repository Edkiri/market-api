<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userRoleId = auth()->user()->role_id;

        if ($userRoleId !== 1) {
            return response()->json([
                'success' => false,
                'message' => 'You have not permissions to perform this action'
            ]);
        }

        return $next($request);
    }
}
