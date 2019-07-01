<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class ArrayColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#array Documentation
 * 
* <a name="array"></a>
* 
* Enumerate an array stored in the db column as JSON.
* ```php
 */
class ArrayColumn extends Column
{ 

    protected $result = ['type' => 'array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ArrayColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ArrayColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ArrayColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}