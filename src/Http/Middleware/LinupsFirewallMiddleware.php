<?php

namespace Linups\WebCrawlerFirewall\Http\Middleware;

use Closure;

class TrackingMiddleware
{



    public function handle($request, Closure $next)
    {
        dump('middleware working');
        return $next($request);
    }
}