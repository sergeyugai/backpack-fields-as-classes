<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class CheckboxField extends Field
{ 

    protected $result = ['type' => 'checkbox']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CheckboxField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CheckboxField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckboxField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}