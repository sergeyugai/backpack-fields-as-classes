<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class EmailField extends Field
{ 

    protected $result = ['type' => 'email']; 

    public function name(string $value): EmailField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EmailField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}