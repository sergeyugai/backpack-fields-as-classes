<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RelationshipColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#relationship Documentation
 * 
* This example will show: 
* - "Draft" when the value stored in the db is 0;
* - "Published" when the value stored in the db is 1;  
* 
* <hr>
* 
* <a name="relationship"></a>
* 
* Output the related entries, no matter the relationship:
* - 1-n relationships - outputs the name of its one connected entity;
* - n-n relationships - enumerates the names of all its connected entities;
* 
* Its name and definition is the same as for the relationship *field type*:
* ```php
 */
class RelationshipColumn extends Column
{ 

    protected $result = ['type' => 'relationship']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RelationshipColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): RelationshipColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): RelationshipColumn
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): RelationshipColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model($value): RelationshipColumn
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}