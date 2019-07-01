<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{DatePickerField};

/**
 * Class DatePickerFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class DatePickerFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : DatePickerFields
    {
        return new self($fields, DatePickerField::class);
    }
    
    public function name(string $value): DatePickerFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): DatePickerFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function date_picker_options(array $value): DatePickerFields
    {
        foreach ($this->result as $f) {
            $f->date_picker_options($value);
        }
        return $this;
    }
    
    
    public function todayBtn(string $value): DatePickerFields
    {
        foreach ($this->result as $f) {
            $f->todayBtn($value);
        }
        return $this;
    }
    
    
    public function format(string $value): DatePickerFields
    {
        foreach ($this->result as $f) {
            $f->format($value);
        }
        return $this;
    }
    
    
    public function language(string $value): DatePickerFields
    {
        foreach ($this->result as $f) {
            $f->language($value);
        }
        return $this;
    }
    
    
}