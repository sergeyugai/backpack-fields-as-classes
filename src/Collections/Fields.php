<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Field};

/**
 * Class Fields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Fields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : Fields
    {
        return new self($fields, Field::class);
    }
    
    public function name(string $value): Fields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): Fields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function options(array $value): Fields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
    public function allows_null(bool $value = true): Fields
    {
        foreach ($this->result as $f) {
            $f->allows_null($value);
        }
        return $this;
    }
    
    
    public function allows_multiple(bool $value = true): Fields
    {
        foreach ($this->result as $f) {
            $f->allows_multiple($value);
        }
        return $this;
    }
    
    
    public function tab(string $value): Fields
    {
        foreach ($this->result as $f) {
            $f->tab($value);
        }
        return $this;
    }
    
    
}