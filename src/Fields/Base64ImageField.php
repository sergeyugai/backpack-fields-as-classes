<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class Base64ImageField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#base64_image Documentation
 * 
* We recommend you cast your attribute as ```array``` on your model.  That way, when you do ```$entry->files``` you get a nice array. The field will work even if you don't cast.
* 
* Input preview: 
* 
* ![CRUD Field - browse_multiple](https://backpackforlaravel.com/uploads/docs-3-5/fields/browse_multiple.png)
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

    protected $result = ['type' => 'base64_image']; 

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
    
    
    public function name(string $value): Base64ImageField
    {
        $this->offsetSet('name', $value);
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