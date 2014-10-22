<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 5:30 PM
 */

namespace Takeout\Admin\Controllers;


use Takeout\Services\CategoryService;
use Takeout\Services\RestaurantService;
use Bootstrapper\Table as Table;

class AdminRestaurantController extends \BaseController {
    function __construct(RestaurantService $restaurant, CategoryService $category)
    {
        $this->restaurant = $restaurant;
        $this->category = $category;
    }

    public function index()
    {
        $data['restaurants'] = $this->restaurant->restaurantIndexList();
        return \View::make('admin.restaurant.index',$data);
    }

    public function create()
    {
        $data['categories'] = $this->category->categoryDropDownList();
        return \View::make('admin.restaurant.create',$data);
    }

    public function store()
    {
        $inputs = \Input::all();
        var_dump($inputs);
    }


} 