<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SelectGroupedField extends Field
{ 

    protected $result = ['type' => 'select_grouped']; 

    public function label(string $value): SelectGroupedField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectGroupedField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectGroupedField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectGroupedField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function group_by(string $value): SelectGroupedField
    {
        $this->offsetSet('group_by', $value);
        return $this;
    }
    
    
    public function group_by_attribute(string $value): SelectGroupedField
    {
        $this->offsetSet('group_by_attribute', $value);
        return $this;
    }
    
    
    public function group_by_relationship_back(string $value): SelectGroupedField
    {
        $this->offsetSet('group_by_relationship_back', $value);
        return $this;
    }
    
    
}