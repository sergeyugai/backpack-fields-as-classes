<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class CustomHtmlField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#custom_html Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - color_picker](https://backpackforlaravel.com/uploads/docs-4-1/fields/color_picker.png)
* 
* <hr>
* 
* <a name="custom-html"></a>
* 
* Allows you to insert custom HTML in the create/update forms. Usually used in forms with a lot of fields, to separate them using h1-h5, hr, etc, but can be used for any HTML.
* 
* ```php
 */
class CustomHtmlField extends Field
{ 

    protected $result = ['type' => 'custom_html']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CustomHtmlField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CustomHtmlField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function value(string $value): CustomHtmlField
    {
        $this->offsetSet('value', $value);
        return $this;
    }
    
    
}