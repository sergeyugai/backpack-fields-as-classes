<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class EnumField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#enum Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - email](https://backpackforlaravel.com/uploads/docs-4-1/fields/email.png)
* 
* 
* <hr>
* 
* <a name="enum"></a>
* 
* Show a select with the values in the database for that ENUM field. Requires that the db column type is "enum". If the db column allows null, the " - " value will also show up in the select.
* 
* ```php
 */
class EnumField extends Field
{ 

    protected $result = ['type' => 'enum']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EnumField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): EnumField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EnumField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}