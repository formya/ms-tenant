<?php

namespace App\Providers;

use App\Service\ProjectService;
use App\Service\SequenceService;
use App\Service\SequenceServiceImpl;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   public function register()
   {
      $this->app->singleton(ProjectService::class, fn()=>new ProjectService());
      $this->app->singleton(SequenceService::class, fn()=>new SequenceServiceImpl());
   }

   public function boot()
   {
      Paginator::defaultView('vendor.pagination.default');
   }
}
