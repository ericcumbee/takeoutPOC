<?php
/**
 * Created by PhpStorm.
 * User: ericcumbee
 * Date: 10/20/14
 * Time: 8:06 PM
 */

namespace Takeout\Validators;


abstract class Validator {
    protected $input;
    public $messages;
    public static $rules;

    public function __construct($input)
    {
        $this->input = $input;
    }

    public function addRule($field, $rule)
    {
        if (isset(static::$rules[$field]))
        {
           static::$rules[$field] .= '|'.$rule;
        }
        else
        {
            static::$rules[$field] = $rule;
        }
    }
    public function fails()
    {
        $validation = \Validator::make($this->input,static::$rules);

        if ($validation->fails())
        {
            $this->messages = $validation->messages();
            return true;
        }

        return false;
    }

    public function messages()
    {
        return $this->messages();
    }
} 