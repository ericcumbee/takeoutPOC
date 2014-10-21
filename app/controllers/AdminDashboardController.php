<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 4:56 PM
 */

namespace Takeout\Admin\Controllers;
use Takeout\Services\RestaurantService;

class AdminDashboardController extends \BaseController {
    function __construct(RestaurantService $restaurant)
    {
        $this->restaurant = $restaurant;
    }
    public function index()
    {
        return "hello";
    }

} 