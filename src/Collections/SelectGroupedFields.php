<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{SelectGroupedField};

/**
 * Class SelectGroupedFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class SelectGroupedFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : SelectGroupedFields
    {
        return new self($fields, SelectGroupedField::class);
    }
    
    public function label(string $value): SelectGroupedFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): SelectGroupedFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): SelectGroupedFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function group_by(string $value): SelectGroupedFields
    {
        foreach ($this->result as $f) {
            $f->group_by($value);
        }
        return $this;
    }
    
    
    public function group_by_attribute(string $value): SelectGroupedFields
    {
        foreach ($this->result as $f) {
            $f->group_by_attribute($value);
        }
        return $this;
    }
    
    
    public function group_by_relationship_back(string $value): SelectGroupedFields
    {
        foreach ($this->result as $f) {
            $f->group_by_relationship_back($value);
        }
        return $this;
    }
    
    
}