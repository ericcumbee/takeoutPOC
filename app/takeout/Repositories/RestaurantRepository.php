<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 6:35 PM
 */

namespace Takeout\Repositories;


class RestaurantRepository implements RestaurantRepositoryInterface {
    public function all()
    {
        return "Hello from the Restaurant Repository";
    }

} 