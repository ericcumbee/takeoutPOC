<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 6:37 PM
 */

namespace Takeout\Repositories;




use Takeout\Model\Category;

class CategoryRepository implements CategoryRepositoryInterface {
    public function all()
    {
        return Category::all();
    }

    public function categoryList()
    {

    }


} 