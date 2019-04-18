<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class Select2Field extends Field
{ 

    protected $result = ['type' => 'select2']; 

    public function label(string $value): Select2Field
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): Select2Field
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2Field
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2Field
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2Field
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function options($value): Select2Field
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}