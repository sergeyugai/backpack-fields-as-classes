<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class PageOrLinkField extends Field
{ 

    protected $result = ['type' => 'page_or_link']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : PageOrLinkField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): PageOrLinkField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): PageOrLinkField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function page_model(string $value): PageOrLinkField
    {
        $this->offsetSet('page_model', $value);
        return $this;
    }
    
    
}