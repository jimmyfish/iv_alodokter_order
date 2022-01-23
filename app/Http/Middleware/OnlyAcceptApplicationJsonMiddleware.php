<?php

namespace App\Http\Middleware;

use Closure;

class OnlyAcceptApplicationJsonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->hasHeader('content-type')) return response()->json([], 404);

        if ($request->header('content-type') !== 'application/json') return response()->json([], 404);

        return $next($request);
    }
}
