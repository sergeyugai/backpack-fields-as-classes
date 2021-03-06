<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Base64ImageField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#base64_image Documentation
 * 
* The field assumes you've cast your attribute as ```array``` on your model.  That way, when you do ```$entry->files``` you get a nice array.
* 
* Input preview: 
* 
* ![CRUD Field - browse_multiple](https://backpackforlaravel.com/uploads/docs-4-1/fields/browse_multiple.png)
* 
* <hr>
* 
* <a name="base64-image"></a>
* 
* Upload an image and store it in the database as Base64. Notes:
* - make sure the column type is LONGBLOB;
* - detailed [instructions and customizations here](https://github.com/Laravel-Backpack/CRUD/pull/56#issue-164712261); 
* 
* ```php
 */
class Base64ImageField extends Field
{ 

    protected $type = 'base64_image';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Base64ImageField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Base64ImageField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function filename(string $value): Base64ImageField
    {
        $this->offsetSet('filename', $value);
        return $this;
    }
    
    
    public function aspect_ratio($value): Base64ImageField
    {
        $this->offsetSet('aspect_ratio', $value);
        return $this;
    }
    
    
    public function crop(bool $value = true): Base64ImageField
    {
        $this->offsetSet('crop', $value);
        return $this;
    }
    
    
    public function src($value): Base64ImageField
    {
        $this->offsetSet('src', $value);
        return $this;
    }
    
    
}