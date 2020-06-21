<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class BooleanColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#boolean Documentation
 * 
* <hr>
* 
* <a name="boolean"></a>
* 
* Show Yes/No (or custom text) instead of 1/0.
* 
* ```php
 */
class BooleanColumn extends Column
{ 

    protected $type = 'boolean';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : BooleanColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): BooleanColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): BooleanColumn
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}