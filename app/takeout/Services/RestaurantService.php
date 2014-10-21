<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 12:33 PM
 */

namespace Takeout\Services;


use Takeout\Repositories\RestaurantRepositoryInterface;
use Takeout\Validators\RestaurantValidator;


class RestaurantService {
    public function __construct(RestaurantRepositoryInterface $restaurant)
    {
        $this->restaurant = $restaurant;

    }

    public function create($inputs)
    {
        $validator = new RestaurantValidator($inputs);
        $result = array();
        if ($validator->fails())
        {
            return $validator;
        }
        return $inputs;
    }
} 