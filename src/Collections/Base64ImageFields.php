<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{Base64ImageField};

/**
 * Class Base64ImageFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class Base64ImageFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : Base64ImageFields
    {
        return new self($fields, Base64ImageField::class);
    }
    
    public function label(string $value): Base64ImageFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): Base64ImageFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function filename(string $value): Base64ImageFields
    {
        foreach ($this->result as $f) {
            $f->filename($value);
        }
        return $this;
    }
    
    
    public function aspect_ratio($value): Base64ImageFields
    {
        foreach ($this->result as $f) {
            $f->aspect_ratio($value);
        }
        return $this;
    }
    
    
    public function crop(bool $value = true): Base64ImageFields
    {
        foreach ($this->result as $f) {
            $f->crop($value);
        }
        return $this;
    }
    
    
    public function src($value): Base64ImageFields
    {
        foreach ($this->result as $f) {
            $f->src($value);
        }
        return $this;
    }
    
    
}