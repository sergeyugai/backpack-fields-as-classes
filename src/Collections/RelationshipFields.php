<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{RelationshipField};

/**
 * Class RelationshipFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class RelationshipFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : RelationshipFields
    {
        return new self($fields, RelationshipField::class);
    }
    
    public function name($value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function model(string $value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function placeholder(string $value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->placeholder($value);
        }
        return $this;
    }
    
    
    public function ajax($value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->ajax($value);
        }
        return $this;
    }
    
    
    public function data_source($value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->data_source($value);
        }
        return $this;
    }
    
    
    public function minimum_input_length($value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->minimum_input_length($value);
        }
        return $this;
    }
    
    
    public function dependencies(array $value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->dependencies($value);
        }
        return $this;
    }
    
    
    public function include_all_form_fields(bool $value = true): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->include_all_form_fields($value);
        }
        return $this;
    }
    
    
    public function inline_create($value): RelationshipFields
    {
        foreach ($this->result as $f) {
            $f->inline_create($value);
        }
        return $this;
    }
    
    
}