<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{DateField};

/**
 * Class DateFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class DateFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : DateFields
    {
        return new self($fields, DateField::class);
    }
    
    public function name(string $value): DateFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): DateFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
}