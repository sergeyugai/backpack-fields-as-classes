<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#select Documentation
 * 
* <hr>
* 
* <a name="select"></a>
* 
* The select column will output its connected entity. Used for relationships like hasOne() and belongsTo(). Its name and definition is the same as for the select *field type*:
* ```php
 */
class SelectColumn extends Column
{ 

    protected $result = ['type' => 'select']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectColumn
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectColumn
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}