<?php

namespace App\Http\Middleware;

use Closure;

class CacheHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Set Cache-Control header for 1 year (31536000 seconds)
        $response->header('Cache-Control', 'public, max-age=31536000');

        return $response;
    }
}
