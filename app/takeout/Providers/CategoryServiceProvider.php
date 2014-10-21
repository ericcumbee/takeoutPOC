<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 1:34 AM
 */

namespace Takeout\ServiceProviders;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('\Takeout\Repositories\CategoryRepositoryInterface','Takeout\Repositories\CategoryRepository');
    }


} 