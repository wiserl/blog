<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Carbon\Carbon;
use App\Post;
use \App\Billing\Stripe;

class AppServiceProvider extends ServiceProvider
{

public function boot()
{
Schema::defaultStringLength(191);

View::share('archives', Post::archives());
}

public function register()
{
$this->app->singleton(Stripe::class, function() {
    return  new Stripe(config('services.stripe.secret'));

});
}
}