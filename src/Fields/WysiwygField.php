<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class WysiwygField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#wysiwyg Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - week](https://backpackforlaravel.com/uploads/docs-4-1/fields/week.png)
* 
* <hr>
* 
* <a name="wysiwyg"></a>
* 
* Show a wysiwyg (CKEditor) to the user.
* 
* ```php
* 
* <a name="overwriting-default-field-types"></a>
* ## Overwriting Default Field Types
* 
* The actual field types are stored in the Backpack/CRUD package in ```/resources/views/fields```. If you need to change an existing field, you don't need to modify the package, you just need to add a blade file in your application in ```/resources/views/vendor/backpack/crud/fields```, with the same name. The package checks there first, and only if there's no file there, will it load it from the package.
* 
* To quickly publish a field blade file in your project, you can use ```php artisan backpack:publish crud/fields/field_name```. For example, to publish the number field type, you'd type ```php artisan backpack:publish crud/fields/number```
* 
* Your field definition will be something like:
* 
* ```php
* 
* And your blade file something like:
* ```php
 */
class WysiwygField extends Field
{ 

    protected $result = ['type' => 'wysiwyg']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : WysiwygField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): WysiwygField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function / view_namespace(string $value): WysiwygField
    {
        $this->offsetSet('/ view_namespace', $value);
        return $this;
    }
    
    
}