<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class WeekField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#week Documentation
 * 
* **Note:** the same functionality can be achieved using a [custom field type](/docs/{{version}}/crud-fields#creating-a-custom-field-type), or using the [custom_html field type](/docs/{{version}}/crud-fields#custom-html) (if the content is really simple).
* 
* <a name="week"></a>
* 
* ```php
 */
class WeekField extends Field
{ 

    protected $result = ['type' => 'week']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : WeekField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): WeekField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): WeekField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}