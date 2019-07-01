<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class EnumField extends Field
{ 

    protected $result = ['type' => 'enum']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EnumField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): EnumField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EnumField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}