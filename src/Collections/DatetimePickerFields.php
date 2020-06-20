<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{DatetimePickerField};

/**
 * Class DatetimePickerFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class DatetimePickerFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : DatetimePickerFields
    {
        return new self($fields, DatetimePickerField::class);
    }
    
    public function label(string $value): DatetimePickerFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function datetime_picker_options(array $value): DatetimePickerFields
    {
        foreach ($this->result as $f) {
            $f->datetime_picker_options($value);
        }
        return $this;
    }
    
    
    public function format(string $value): DatetimePickerFields
    {
        foreach ($this->result as $f) {
            $f->format($value);
        }
        return $this;
    }
    
    
    public function language(string $value): DatetimePickerFields
    {
        foreach ($this->result as $f) {
            $f->language($value);
        }
        return $this;
    }
    
    
    public function allows_null(bool $value = true): DatetimePickerFields
    {
        foreach ($this->result as $f) {
            $f->allows_null($value);
        }
        return $this;
    }
    
    
    public function default(string $value): DatetimePickerFields
    {
        foreach ($this->result as $f) {
            $f->default($value);
        }
        return $this;
    }
    
    
}