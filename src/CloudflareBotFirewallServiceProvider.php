<?php

namespace Linups\WebCrawlerFirewall;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            });
    }
}
