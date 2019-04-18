<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ChecklistField extends Field
{ 

    protected $result = ['type' => 'checklist']; 

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