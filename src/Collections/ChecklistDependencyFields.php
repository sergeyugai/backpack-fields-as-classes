<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{ChecklistDependencyField};

/**
 * Class ChecklistDependencyFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class ChecklistDependencyFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : ChecklistDependencyFields
    {
        return new self($fields, ChecklistDependencyField::class);
    }
    
    public function primary(array $value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->primary($value);
        }
        return $this;
    }
    
    
    public function label($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function entity($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function entity_secondary(string $value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->entity_secondary($value);
        }
        return $this;
    }
    
    
    public function attribute($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function model($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function pivot($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->pivot($value);
        }
        return $this;
    }
    
    
    public function number_columns($value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->number_columns($value);
        }
        return $this;
    }
    
    
    public function secondary(array $value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->secondary($value);
        }
        return $this;
    }
    
    
    public function entity_primary(string $value): ChecklistDependencyFields
    {
        foreach ($this->result as $f) {
            $f->entity_primary($value);
        }
        return $this;
    }
    
    
}