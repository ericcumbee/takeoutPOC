<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/21/14
 * Time: 7:10 PM
 */

namespace Takeout\Services;


use Takeout\Repositories\CategoryRepositoryInterface;

class CategoryService {

    function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    public function categoryDropDownList()
    {
        $catList = $this->category->all();
        $options = '';
        foreach ($catList as $cat)
        {
                $options .= '<option value="'.$cat->_id.'">'.$cat->name.'</option>';
        }
        return $options;
    }
}