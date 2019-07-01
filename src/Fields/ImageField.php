<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ImageField extends Field
{ 

    protected $result = ['type' => 'image']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ImageField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): ImageField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): ImageField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function upload(bool $value = true): ImageField
    {
        $this->offsetSet('upload', $value);
        return $this;
    }
    
    
    public function crop(bool $value = true): ImageField
    {
        $this->offsetSet('crop', $value);
        return $this;
    }
    
    
    public function aspect_ratio($value): ImageField
    {
        $this->offsetSet('aspect_ratio', $value);
        return $this;
    }
    
    
    public function disk(string $value): ImageField
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    
    public function prefix(string $value): ImageField
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
}