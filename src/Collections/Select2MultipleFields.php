<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Select2MultipleField};

/**
 * Class Select2MultipleFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Select2MultipleFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : Select2MultipleFields
    {
        return new self($fields, Select2MultipleField::class);
    }
    
    public function label(string $value): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function model(string $value): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function pivot(bool $value = true): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->pivot($value);
        }
        return $this;
    }
    
    
    public function select_all(bool $value = true): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->select_all($value);
        }
        return $this;
    }
    
    
    public function options($value): Select2MultipleFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
}