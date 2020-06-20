<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{HiddenField};

/**
 * Class HiddenFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class HiddenFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : HiddenFields
    {
        return new self($fields, HiddenField::class);
    }
    
    public function name(string $value): HiddenFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function value(string $value): HiddenFields
    {
        foreach ($this->result as $f) {
            $f->value($value);
        }
        return $this;
    }
    
    
}