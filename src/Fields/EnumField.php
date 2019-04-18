<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class EnumField extends Field
{ 

    protected $result = ['type' => 'enum']; 

    public function name(string $value): EnumField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EnumField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}