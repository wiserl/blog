<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Carbon\Carbon;
use App\Post;

class AppServiceProvider extends ServiceProvider
{

public function boot()
{
Schema::defaultStringLength(191);

View::share('archives', Post::archives());
}

public function register()
{
//
}
}