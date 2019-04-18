<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class TextareaField extends Field
{ 

    protected $result = ['type' => 'textarea']; 

    public function name(string $value): TextareaField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TextareaField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}