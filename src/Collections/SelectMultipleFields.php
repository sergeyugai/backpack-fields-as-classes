<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{SelectMultipleField};

/**
 * Class SelectMultipleFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class SelectMultipleFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : SelectMultipleFields
    {
        return new self($fields, SelectMultipleField::class);
    }
    
    public function label(string $value): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function model(string $value): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function pivot(bool $value = true): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->pivot($value);
        }
        return $this;
    }
    
    
    public function options($value): SelectMultipleFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
}