<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SummernoteField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#summernote Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - simplemde](https://backpackforlaravel.com/uploads/docs-4-1/fields/simplemde.png)
* 
* <hr>
* 
* <a name="summernote"></a>
* 
* Show a [Summernote wysiwyg editor](http://summernote.org/) to the user.
* 
* ```php
 */
class SummernoteField extends Field
{ 

    protected $type = 'summernote';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SummernoteField
    {
        return new self($name, $label);
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