<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class EmailField extends Field
{ 

    protected $result = ['type' => 'email']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EmailField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): EmailField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EmailField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}