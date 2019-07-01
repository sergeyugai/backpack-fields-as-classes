<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SummernoteField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#summernote Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - simplemde](https://backpackforlaravel.com/uploads/docs-3-5/fields/simplemde.png)
* 
* <a name="summernote"></a>
* 
* Show a [Summernote wysiwyg editor](http://summernote.org/) to the user.
* 
* ```php
 */
class SummernoteField extends Field
{ 

    protected $result = ['type' => 'summernote']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SummernoteField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): SummernoteField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SummernoteField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): SummernoteField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}