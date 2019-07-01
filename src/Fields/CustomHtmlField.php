<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class CustomHtmlField extends Field
{ 

    protected $result = ['type' => 'custom_html']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CustomHtmlField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CustomHtmlField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function value(string $value): CustomHtmlField
    {
        $this->offsetSet('value', $value);
        return $this;
    }
    
    
}