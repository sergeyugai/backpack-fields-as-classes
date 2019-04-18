<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ColorField extends Field
{ 

    protected $result = ['type' => 'color']; 

    public function name(string $value): ColorField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ColorField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}