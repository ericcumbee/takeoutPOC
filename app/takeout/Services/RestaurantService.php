<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 12:33 PM
 */

namespace Takeout\Services;


use Illuminate\Support\Facades\URL;
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
        if ($validator->fails())
        {
            return $validator;
        }
        var_dump($inputs);
        $data['name'] = $inputs['name'];
        $data['category'] = $inputs['category'];
        $data['enabled'] =  (boolean)($inputs['enabled'] === 'true');
        $restaurant = $this->restaurant->create();
        //Save Restaraunt to DB
        //Save Regular Hours to DB
        //Create Job to Resize logo
        //Create User Accounts for Restaruant Users
        return $data;
    }

    public function restaurantIndexList()
    {
        $data = $this->restaurant->all();
        $indexlist = array();
        foreach ($data as $d)
        {
            $indexlist[] = array(
              'name' => $d->name,
                'id' => $d->id
            );
        }
        return $indexlist;
    }
} 