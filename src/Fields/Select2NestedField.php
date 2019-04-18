<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class Select2NestedField extends Field
{ 

    protected $result = ['type' => 'select2_nested']; 

    public function name(string $value): Select2NestedField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): Select2NestedField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2NestedField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2NestedField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2NestedField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}