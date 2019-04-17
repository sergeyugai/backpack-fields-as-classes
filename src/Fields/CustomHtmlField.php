<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class CustomHtmlField extends Field
{ 

    protected $result = ['type' => 'custom_html']; 

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