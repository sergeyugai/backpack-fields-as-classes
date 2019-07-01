<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{SelectAndOrderField};

/**
 * Class SelectAndOrderFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class SelectAndOrderFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : SelectAndOrderFields
    {
        return new self($fields, SelectAndOrderField::class);
    }
    
    public function featured(string $value): SelectAndOrderFields
    {
        foreach ($this->result as $f) {
            $f->featured($value);
        }
        return $this;
    }
    
    
    public function name(string $value): SelectAndOrderFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): SelectAndOrderFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function options(string $value): SelectAndOrderFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
    public function 0(string $value): SelectAndOrderFields
    {
        foreach ($this->result as $f) {
            $f->0($value);
        }
        return $this;
    }
    
    
    public function 1(string $value): SelectAndOrderFields
    {
        foreach ($this->result as $f) {
            $f->1($value);
        }
        return $this;
    }
    
    
}