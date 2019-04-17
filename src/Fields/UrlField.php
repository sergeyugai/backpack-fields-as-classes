<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class UrlField extends Field
{ 

    protected $result = ['type' => 'url']; 

    public function name(string $value): UrlField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UrlField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }