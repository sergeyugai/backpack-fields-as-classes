<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{WysiwygField};

/**
 * Class WysiwygFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class WysiwygFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : WysiwygFields
    {
        return new self($fields, WysiwygField::class);
    }
    
    public function name(string $value): WysiwygFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): WysiwygFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function / view_namespace(string $value): WysiwygFields
    {
        foreach ($this->result as $f) {
            $f->/ view_namespace($value);
        }
        return $this;
    }
    
    
}