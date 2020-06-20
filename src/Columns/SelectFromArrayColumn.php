<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectFromArrayColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#select_from_array Documentation
 * 
* <hr>
* 
* <a name="select_from_array"></a>
* 
* Show a particular text depending on the value of the attribute.
* 
* ```php
 */
class SelectFromArrayColumn extends Column
{ 

    protected $result = ['type' => 'select_from_array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectFromArrayColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectFromArrayColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): SelectFromArrayColumn
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}