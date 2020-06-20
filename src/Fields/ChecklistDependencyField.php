<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ChecklistDependencyField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#checklist_dependency Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - checklist](https://backpackforlaravel.com/uploads/docs-4-1/fields/checklist.png)
* 
* <hr>
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
    
    public function label($value): ChecklistDependencyField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function field_unique_name(string $value): ChecklistDependencyField
    {
        $this->offsetSet('field_unique_name', $value);
        return $this;
    }
    
    
    public function subfields(array $value): ChecklistDependencyField
    {
        $this->offsetSet('subfields', $value);
        return $this;
    }
    
    
    public function primary(array $value): ChecklistDependencyField
    {
        $this->offsetSet('primary', $value);
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
        $this->offsetSet('secondary', $value);
        return $this;
    }
    
    
    public function entity_primary(string $value): ChecklistDependencyField
    {
        $this->offsetSet('entity_primary', $value);
        return $this;
    }
    
    
}