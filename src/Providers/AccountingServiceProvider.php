<?php

declare(strict_types=1);

namespace Scottlaurent\Accounting\Providers;

use Illuminate\Support\ServiceProvider;

class AccountingServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(): void
    {
        $this->publishesConfig(__DIR__ . '/../../config/accounting.php', 'accounting.php');
        $this->publishesMigrations(__DIR__ . '/../migrations/', 'accounting.php');
    }

    /**
     * Register any package services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/accounting.php', 'accounting');
    }
}
