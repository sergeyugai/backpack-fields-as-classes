<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Select2GroupedField};

/**
 * Class Select2GroupedFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Select2GroupedFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : Select2GroupedFields
    {
        return new self($fields, Select2GroupedField::class);
    }
    
    public function label(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function group_by(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->group_by($value);
        }
        return $this;
    }
    
    
    public function group_by_attribute(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->group_by_attribute($value);
        }
        return $this;
    }
    
    
    public function group_by_relationship_back(string $value): Select2GroupedFields
    {
        foreach ($this->result as $f) {
            $f->group_by_relationship_back($value);
        }
        return $this;
    }
    
    
}