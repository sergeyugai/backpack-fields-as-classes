<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class BrowseField extends Field
{ 

    protected $result = ['type' => 'browse']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : BrowseField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): BrowseField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): BrowseField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}