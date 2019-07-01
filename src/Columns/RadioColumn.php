<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RadioColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#radio Documentation
 * 
* <a name="radio"></a>
* 
* 
* Show a pretty text instead of the database value, according to an associative array. Usually used as a column for the "radio" field type.
* 
* ```php
 */
class RadioColumn extends Column
{ 

    protected $result = ['type' => 'radio']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RadioColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): RadioColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): RadioColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): RadioColumn
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function 0(string $value): RadioColumn
    {
        $this->offsetSet('0', $value);
        return $this;
    }
    
    
    public function 1(string $value): RadioColumn
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    
}