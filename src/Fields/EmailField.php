<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class EmailField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#email Documentation
 * Otherwise the input's datetime-local formal will cause some errors. Remeber to change "datetime" with the name of your attribute (column name).
* 
* Input preview: 
* 
* ![CRUD Field - datetime_picker](https://backpackforlaravel.com/uploads/docs-3-5/fields/datetime_picker.png)
* 
* <a name="email"></a>
* 
* ```php
 */
class EmailField extends Field
{ 

    protected $result = ['type' => 'email']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EmailField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): EmailField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EmailField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}