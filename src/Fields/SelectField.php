<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SelectField extends Field
{ 

    protected $result = ['type' => 'select (1-n relationship)']; 

    public function label(string $value): SelectField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function options( $value): SelectField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    }