<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ColorField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#color Documentation
 * 
* If you'd like to be able to select files from elFinder, you need to also run ```composer require backpack/filemanager``` to install elFinder.
* 
* Input preview: 
* 
* ![CRUD Field - ckeditor](https://backpackforlaravel.com/uploads/docs-4-1/fields/ckeditor.png)
* 
* <hr>
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
    
    
    public function default(string $value): ColorField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
}