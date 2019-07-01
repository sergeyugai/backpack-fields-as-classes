<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class TinymceField extends Field
{ 

    protected $result = ['type' => 'tinymce']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TinymceField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): TinymceField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TinymceField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}