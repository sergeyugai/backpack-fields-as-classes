<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class PageOrLinkField extends Field
{ 

    protected $result = ['type' => 'page_or_link']; 

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