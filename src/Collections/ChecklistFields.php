<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{ChecklistField};

/**
 * Class ChecklistFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class ChecklistFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : ChecklistFields
    {
        return new self($fields, ChecklistField::class);
    }
    
    public function label(string $value): ChecklistFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): ChecklistFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): ChecklistFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function model(string $value): ChecklistFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function pivot(bool $value = true): ChecklistFields
    {
        foreach ($this->result as $f) {
            $f->pivot($value);
        }
        return $this;
    }
    
    
}