<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{RepeatableField};

/**
 * Class RepeatableFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class RepeatableFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : RepeatableFields
    {
        return new self($fields, RepeatableField::class);
    }
    
    public function name($value): RepeatableFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label($value): RepeatableFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function fields(array $value): RepeatableFields
    {
        foreach ($this->result as $f) {
            $f->fields($value);
        }
        return $this;
    }
    
    
    public function wrapper($value): RepeatableFields
    {
        foreach ($this->result as $f) {
            $f->wrapper($value);
        }
        return $this;
    }
    
    
}