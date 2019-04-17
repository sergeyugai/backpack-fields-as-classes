<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ChecklistDependencyField extends Field
{ 

    protected $result = ['type' => 'checklist_dependency']; 

    public function primary(array $value): ChecklistDependencyField
    {
        $this->offsetSet('primary', $value);
        return $this;
    }
    
    
    public function label(string $value): ChecklistDependencyField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): ChecklistDependencyField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): ChecklistDependencyField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function entity_secondary(string $value): ChecklistDependencyField
    {
        $this->offsetSet('entity_secondary', $value);
        return $this;
    }
    
    
    public function attribute(string $value): ChecklistDependencyField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): ChecklistDependencyField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function pivot(bool $value): ChecklistDependencyField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function number_columns(string $value): ChecklistDependencyField
    {
        $this->offsetSet('number_columns', $value);
        return $this;
    }
    
    
    public function secondary(array $value): ChecklistDependencyField
    {
        $this->offsetSet('secondary', $value);
        return $this;
    }
    
    
    public function entity_primary(string $value): ChecklistDependencyField
    {
        $this->offsetSet('entity_primary', $value);
        return $this;
    }
    
    }