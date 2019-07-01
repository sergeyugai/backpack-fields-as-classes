<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class PasswordField extends Field
{ 

    protected $result = ['type' => 'password']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : PasswordField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): PasswordField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): PasswordField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}