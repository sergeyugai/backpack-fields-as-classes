<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{RangeField};

/**
 * Class RangeFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class RangeFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : RangeFields
    {
        return new self($fields, RangeField::class);
    }
    
    public function label(string $value): RangeFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function attributes(array $value): RangeFields
    {
        foreach ($this->result as $f) {
            $f->attributes($value);
        }
        return $this;
    }
    
    
    public function min($value): RangeFields
    {
        foreach ($this->result as $f) {
            $f->min($value);
        }
        return $this;
    }
    
    
    public function max($value): RangeFields
    {
        foreach ($this->result as $f) {
            $f->max($value);
        }
        return $this;
    }
    
    
}