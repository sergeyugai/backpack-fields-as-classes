<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SelectMultipleField extends Field
{ 

    protected $result = ['type' => 'select_multiple (n-n relationship)']; 

    public function label(string $value): SelectMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectMultipleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectMultipleField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectMultipleField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectMultipleField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function pivot(bool $value): SelectMultipleField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function options(string $value): SelectMultipleField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    }