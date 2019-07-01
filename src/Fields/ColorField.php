<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class ColorField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#color Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - ckeditor](https://backpackforlaravel.com/uploads/docs-3-5/fields/ckeditor.png)
* 
* <a name="color"></a>
* 
* ```php
 */
class ColorField extends Field
{ 

    protected $result = ['type' => 'color']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ColorField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ColorField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ColorField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}