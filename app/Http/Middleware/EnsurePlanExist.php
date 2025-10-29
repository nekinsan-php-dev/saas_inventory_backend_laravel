<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsurePlanExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $auth = $request->user();
        if ($auth && $auth->tenant && !$auth->tenant->plan_id) {
            return response()->json([
                'message' => 'No plan associated with the tenant. Please subscribe to a plan.',
            ], 403);
        }
        
        return $next($request);
    }
}
