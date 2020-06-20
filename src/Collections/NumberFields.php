<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{NumberField};

/**
 * Class NumberFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class NumberFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : NumberFields
    {
        return new self($fields, NumberField::class);
    }
    
    public function label(string $value): NumberFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function attributes(array $value): NumberFields
    {
        foreach ($this->result as $f) {
            $f->attributes($value);
        }
        return $this;
    }
    
    
    public function prefix(string $value): NumberFields
    {
        foreach ($this->result as $f) {
            $f->prefix($value);
        }
        return $this;
    }
    
    
    public function suffix(string $value): NumberFields
    {
        foreach ($this->result as $f) {
            $f->suffix($value);
        }
        return $this;
    }
    
    
}