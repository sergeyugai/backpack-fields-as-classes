<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{ColorPickerField};

/**
 * Class ColorPickerFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class ColorPickerFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : ColorPickerFields
    {
        return new self($fields, ColorPickerField::class);
    }
    
    public function label(string $value): ColorPickerFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): ColorPickerFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function color_picker_options(array $value): ColorPickerFields
    {
        foreach ($this->result as $f) {
            $f->color_picker_options($value);
        }
        return $this;
    }
    
    
}