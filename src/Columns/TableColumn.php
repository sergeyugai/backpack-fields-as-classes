<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TableColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#table Documentation
 * 
* <hr>
* 
* <a name="table"></a>
* 
* 
* The ```table``` column will output a condensed table, when used on an attribute that stores a JSON array or object. It is meant to be used inside the show functionality (not list, though it also works there).
* 
* Its definition is very similar to the [table *field type*](/docs/{{version}}/crud-fields#table).
* 
* ```php
 */
class TableColumn extends Column
{ 

    protected $result = ['type' => 'table']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TableColumn
    {
        return new self($name, $label);
    }
    
    public function name($value): TableColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TableColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function columns(array $value): TableColumn
    {
        $this->offsetSet('columns', $value);
        return $this;
    }
    
    
    public function description(string $value): TableColumn
    {
        $this->offsetSet('description', $value);
        return $this;
    }
    
    
    public function price(string $value): TableColumn
    {
        $this->offsetSet('price', $value);
        return $this;
    }
    
    
    public function obs(string $value): TableColumn
    {
        $this->offsetSet('obs', $value);
        return $this;
    }
    
    
}