<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{DateRangeField};

/**
 * Class DateRangeFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class DateRangeFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : DateRangeFields
    {
        return new self($fields, DateRangeField::class);
    }
    
    public function name(string $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function start_name(string $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->start_name($value);
        }
        return $this;
    }
    
    
    public function end_name(string $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->end_name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function start_default(string $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->start_default($value);
        }
        return $this;
    }
    
    
    public function end_default(string $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->end_default($value);
        }
        return $this;
    }
    
    
    public function date_range_options(array $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->date_range_options($value);
        }
        return $this;
    }
    
    
    public function timePicker(bool $value = true): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->timePicker($value);
        }
        return $this;
    }
    
    
    public function locale(array $value): DateRangeFields
    {
        foreach ($this->result as $f) {
            $f->locale($value);
        }
        return $this;
    }
    
    
}