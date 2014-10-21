<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 7:53 PM
 */

namespace Takeout\Model;
use Jenssegers\Mongodb\Model as Eloquent;

class Menu extends Eloquent {

    public function restaurant()
    {
        //return relationship belongs to one
    }
    public function items ()
    {
        //returns relationship has many items
    }
} 