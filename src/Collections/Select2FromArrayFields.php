<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Select2FromArrayField};

/**
 * Class Select2FromArrayFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Select2FromArrayFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : Select2FromArrayFields
    {
        return new self($fields, Select2FromArrayField::class);
    }
    
    public function name(string $value): Select2FromArrayFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): Select2FromArrayFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function options(array $value): Select2FromArrayFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
    public function allows_null(bool $value = true): Select2FromArrayFields
    {
        foreach ($this->result as $f) {
            $f->allows_null($value);
        }
        return $this;
    }
    
    
    public function default(string $value): Select2FromArrayFields
    {
        foreach ($this->result as $f) {
            $f->default($value);
        }
        return $this;
    }
    
    
    public function allows_multiple(bool $value = true): Select2FromArrayFields
    {
        foreach ($this->result as $f) {
            $f->allows_multiple($value);
        }
        return $this;
    }
    
    
}