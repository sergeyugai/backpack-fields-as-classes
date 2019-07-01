<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class Select2MultipleField extends Field
{ 

    protected $result = ['type' => 'select2_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2MultipleField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Select2MultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): Select2MultipleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2MultipleField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2MultipleField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2MultipleField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function pivot(bool $value = true): Select2MultipleField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function select_all(bool $value = true): Select2MultipleField
    {
        $this->offsetSet('select_all', $value);
        return $this;
    }
    
    
    public function options($value): Select2MultipleField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}