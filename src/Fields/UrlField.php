<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

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