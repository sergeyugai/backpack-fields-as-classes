<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TimeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#time Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - textarea](https://backpackforlaravel.com/uploads/docs-3-5/fields/textarea.png)
* 
* <a name="time"></a>
* 
* ```php
 */
class TimeField extends Field
{ 

    protected $result = ['type' => 'time']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TimeField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): TimeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TimeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}