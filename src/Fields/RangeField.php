<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class RangeField extends Field
{ 

    protected $result = ['type' => 'range']; 

    public function name(string $value): RangeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): RangeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}