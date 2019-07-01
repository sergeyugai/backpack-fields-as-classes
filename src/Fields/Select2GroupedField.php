<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class Select2GroupedField extends Field
{ 

    protected $result = ['type' => 'select2_grouped']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2GroupedField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Select2GroupedField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): Select2GroupedField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2GroupedField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2GroupedField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function group_by(string $value): Select2GroupedField
    {
        $this->offsetSet('group_by', $value);
        return $this;
    }
    
    
    public function group_by_attribute(string $value): Select2GroupedField
    {
        $this->offsetSet('group_by_attribute', $value);
        return $this;
    }
    
    
    public function group_by_relationship_back(string $value): Select2GroupedField
    {
        $this->offsetSet('group_by_relationship_back', $value);
        return $this;
    }
    
    
}