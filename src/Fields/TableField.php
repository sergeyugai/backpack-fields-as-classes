<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TableField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#table Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - summernote](https://backpackforlaravel.com/uploads/docs-4-1/fields/summernote.png)
* 
* <hr>
* 
* <a name="table"></a>
* 
* Show a table with multiple inputs per row and store the values as JSON in the database. The user can add more rows and reorder the rows as they please.
* 
* ```php
 */
class TableField extends Field
{ 

    protected $type = 'table';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TableField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): TableField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity_singular(string $value): TableField
    {
        $this->offsetSet('entity_singular', $value);
        return $this;
    }
    
    
    public function columns(array $value): TableField
    {
        $this->offsetSet('columns', $value);
        return $this;
    }
    
    
    public function desc(string $value): TableField
    {
        $this->offsetSet('desc', $value);
        return $this;
    }
    
    
    public function price(string $value): TableField
    {
        $this->offsetSet('price', $value);
        return $this;
    }
    
    
    public function max($value): TableField
    {
        $this->offsetSet('max', $value);
        return $this;
    }
    
    
    public function min($value): TableField
    {
        $this->offsetSet('min', $value);
        return $this;
    }
    
    
}