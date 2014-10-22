<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 6:34 PM
 */
namespace Takeout\Repositories;
interface RestaurantRepositoryInterface {
    public function all();
    public function create($data);

}