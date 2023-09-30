<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class AdminRoute
{
    public function handle($request, Closure $next)
    {
        if ($request->route()) {
            $inAdminRouteGroup = in_array('admin', explode('/', request()->url())) ? true : false;
            view()->share('inAdminRouteGroup', $inAdminRouteGroup);
        }

        return $next($request);
    }
}
