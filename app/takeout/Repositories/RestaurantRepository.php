<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 6:35 PM
 */

namespace Takeout\Repositories;



use Takeout\Model\Restaurant;

class RestaurantRepository implements RestaurantRepositoryInterface {
    public function all()
    {

        $data = Restaurant::all();
        if($data->count() != 0)
        {
            return $data;
        }
    }
    public function create($data)
    {

    }

} 