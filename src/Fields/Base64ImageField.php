<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class Base64ImageField extends Field
{ 

    protected $result = ['type' => 'base64_image']; 

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