<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Select2FromAjaxMultipleField};

/**
 * Class Select2FromAjaxMultipleFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Select2FromAjaxMultipleFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : Select2FromAjaxMultipleFields
    {
        return new self($fields, Select2FromAjaxMultipleField::class);
    }
    
    public function label(string $value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function entity(string $value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->entity($value);
        }
        return $this;
    }
    
    
    public function attribute(string $value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->attribute($value);
        }
        return $this;
    }
    
    
    public function data_source($value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->data_source($value);
        }
        return $this;
    }
    
    
    public function pivot(bool $value = true): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->pivot($value);
        }
        return $this;
    }
    
    
    public function model(string $value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->model($value);
        }
        return $this;
    }
    
    
    public function placeholder(string $value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->placeholder($value);
        }
        return $this;
    }
    
    
    public function minimum_input_length($value): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->minimum_input_length($value);
        }
        return $this;
    }
    
    
    public function include_all_form_fields(bool $value = true): Select2FromAjaxMultipleFields
    {
        foreach ($this->result as $f) {
            $f->include_all_form_fields($value);
        }
        return $this;
    }
    
    
}