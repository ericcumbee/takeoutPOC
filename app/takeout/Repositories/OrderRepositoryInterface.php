<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 6:44 PM
 */

namespace Takeout\Repositories;


interface OrderRepositoryInterface {
    public function create(array $attributes);
    public function all($columns = array('*'));
    public function orderById($order_id);
    public function getOpenOrders();
    public function getCompletedOrders();
} 