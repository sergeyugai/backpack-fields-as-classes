<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{IconPickerField};

/**
 * Class IconPickerFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class IconPickerFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : IconPickerFields
    {
        return new self($fields, IconPickerField::class);
    }
    
    public function label(string $value): IconPickerFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): IconPickerFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function iconset(string $value): IconPickerFields
    {
        foreach ($this->result as $f) {
            $f->iconset($value);
        }
        return $this;
    }
    
    
}