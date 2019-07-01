<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class CheckboxField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#checkbox Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - base64_image](https://backpackforlaravel.com/uploads/docs-3-5/fields/base64_image.png)
* 
* <a name="checkbox"></a>
* 
* Checkbox for true/false.
* 
* ```php
 */
class CheckboxField extends Field
{ 

    protected $result = ['type' => 'checkbox']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CheckboxField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CheckboxField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckboxField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}