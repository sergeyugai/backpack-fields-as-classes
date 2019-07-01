<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class HiddenField extends Field
{ 

    protected $result = ['type' => 'hidden']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : HiddenField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): HiddenField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
}