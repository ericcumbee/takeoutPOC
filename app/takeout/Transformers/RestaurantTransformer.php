<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 8:22 PM
 */

namespace Takeout\Transformers;
use Takeout\Model\Restaurant;
use League\Fractal;


class RestaurantTransformer extends Fractal\TransformerAbstract {

    public function transform(Restaurant $restaurant)
    {
        return [];
    }
} 