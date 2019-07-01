<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class Base64ImageField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#base64_image Documentation
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