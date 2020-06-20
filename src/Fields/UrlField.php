<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class UrlField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#url Documentation
 * 
* You might notice the field is using a ```clear_photos``` variable. Don't worry, you don't need it in your db table. That's just used to delete photos upon "update". If you use ```$fillable``` on your model, just don't include it. If you use ```$guarded``` on your model, place it in guarded.
* 
* Input preview: 
* 
* ![CRUD Field - upload_multiple](https://backpackforlaravel.com/uploads/docs-4-1/fields/upload_multiple.png)
* 
* 
* 
* ```php
 */
class UrlField extends Field
{ 

    protected $result = ['type' => 'url']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : UrlField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): UrlField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UrlField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}