<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 11:37 AM
 */

namespace Takeout\ServiceProviders;
use Illuminate\Support\ServiceProvider;

class RestaurantServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Takeout\Repositories\RestaurantRepositoryInterface','Takeout\Repositories\RestaurantRepository');
    }


} 