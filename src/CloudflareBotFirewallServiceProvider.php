<?php

namespace Linups\WebCrawlerFirewall;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Linups\WebCrawlerFirewall\Http\Middleware\LinupsFirewallMiddleware;

class CloudflareBotFirewallServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Route::prefix('web-crawler-firewall')
            ->as('web-crawler-firewall.')
            ->middleware(['LinupsFirewallMiddleware'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('LinupsFirewallMiddleware', LinupsFirewallMiddleware::class);
    }
}
