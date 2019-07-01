<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

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
    
    
}