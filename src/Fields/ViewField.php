<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ViewField extends Field
{ 

    protected $result = ['type' => 'view']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ViewField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ViewField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function view(string $value): ViewField
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    
}