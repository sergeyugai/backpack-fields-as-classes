<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectMultipleColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#select_multiple Documentation
 * 
* <hr>
* 
* <a name="select_multiple"></a>
* 
* The select_multiple column will output a comma separated list of its connected entities. Used for relationships like hasMany() and belongsToMany(). Its name and definition is the same as the select_multiple field:
* ```php
 */
class SelectMultipleColumn extends Column
{ 

    protected $type = 'select_multiple';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectMultipleColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectMultipleColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectMultipleColumn
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectMultipleColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectMultipleColumn
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}