<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Select2FromAjaxField};

/**
 * Class Select2FromAjaxFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Select2FromAjaxFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : Select2FromAjaxFields
    {
        return new self($fields, Select2FromAjaxField::class);
    }
    
    public function label(string $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function data_source($value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->data_source($value);
        }
        return $this;
    }
    
    
    public function placeholder(string $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->placeholder($value);
        }
        return $this;
    }
    
    
    public function minimum_input_length($value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->minimum_input_length($value);
        }
        return $this;
    }
    
    
    public function model(string $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function dependencies(array $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->dependencies($value);
        }
        return $this;
    }
    
    
    public function method(string $value): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->method($value);
        }
        return $this;
    }
    
    
    public function include_all_form_fields(bool $value = true): Select2FromAjaxFields
    {
        foreach ($this->result as $f) {
            $f->include_all_form_fields($value);
        }
        return $this;
    }
    
    
}