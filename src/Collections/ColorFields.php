<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{ColorField};

/**
 * Class ColorFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class ColorFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : ColorFields
    {
        return new self($fields, ColorField::class);
    }
    
    public function label(string $value): ColorFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function default(string $value): ColorFields
    {
        foreach ($this->result as $f) {
            $f->default($value);
        }
        return $this;
    }
    
    
}