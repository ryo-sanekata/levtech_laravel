<?php
namespace App\Providers;

use Illuminate\Pagination\Paginator; //追記

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
       Paginator::useBootstrap();    //追記


       // Paginator::useBootstrapFive();    公式ドキュメント
       //または Paginator::useBootstrapFour();    公式ドキュメント
    }

    // public function boot(): void
    // {
    //     //
    // }
}
