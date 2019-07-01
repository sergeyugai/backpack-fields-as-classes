<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class ChecklistDependencyField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#checklist_dependency Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - checklist](https://backpackforlaravel.com/uploads/docs-3-5/fields/checklist.png)
* 
* <a name="checklist-dependency"></a>
* 
* ```php
 */
class ChecklistDependencyField extends Field
{ 

    protected $result = ['type' => 'checklist_dependency']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ChecklistDependencyField
    {
        return new self($name, $label);
    }
    
    public function primary(array $value): ChecklistDependencyField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('primary', $value);
        return $this;
    }
    
    
    public function label($value): ChecklistDependencyField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name($value): ChecklistDependencyField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity($value): ChecklistDependencyField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function entity_secondary(string $value): ChecklistDependencyField
    {
        $this->offsetSet('entity_secondary', $value);
        return $this;
    }
    
    
    public function attribute($value): ChecklistDependencyField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model($value): ChecklistDependencyField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function pivot($value): ChecklistDependencyField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function number_columns($value): ChecklistDependencyField
    {
        $this->offsetSet('number_columns', $value);
        return $this;
    }
    
    
    public function secondary(array $value): ChecklistDependencyField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('secondary', $value);
        return $this;
    }
    
    
    public function entity_primary(string $value): ChecklistDependencyField
    {
        $this->offsetSet('entity_primary', $value);
        return $this;
    }
    
    
}