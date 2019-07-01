<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ChecklistField extends Field
{ 

    protected $result = ['type' => 'checklist']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ChecklistField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): ChecklistField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): ChecklistField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): ChecklistField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): ChecklistField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): ChecklistField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function pivot(bool $value = true): ChecklistField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
}