<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function boot(): void 
    {
        Paginator::useBootstrap();
    

    /**
     * Bootstrap any application services.
     */
    
       // Paginator::useBootstrapFive();    公式ドキュメント
       //または Paginator::useBootstrapFour();    公式ドキュメント
    }
}
