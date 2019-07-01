<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Select2Field};

/**
 * Class Select2Fields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Select2Fields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : Select2Fields
    {
        return new self($fields, Select2Field::class);
    }
    
    public function label(string $value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function model(string $value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function default($value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->default($value);
        }
        return $this;
    }
    
    
    public function options($value): Select2Fields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
}