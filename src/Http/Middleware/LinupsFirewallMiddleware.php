<?php

namespace Linups\WebCrawlerFirewall\Http\Middleware;

use Closure;

class LinupsFirewallMiddleware
{



    public function handle($request, Closure $next)
    {
        dump('middleware working');
        \Log::Debug('working');
        return $next($request);
    }
}
