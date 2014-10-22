<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 7:50 PM
 */
namespace Takeout\Model;

use Zizaco\MongolidLaravel\MongoLid;

class Restaurant extends MongoLid{
    protected $collection = 'restaurants';
} 