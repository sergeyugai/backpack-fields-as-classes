<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class WysiwygField extends Field
{ 

    protected $result = ['type' => 'wysiwyg']; 

    public function name(string $value): WysiwygField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): WysiwygField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function / view_namespace(string $value): WysiwygField
    {
        $this->offsetSet('/ view_namespace', $value);
        return $this;
    }
    
    }