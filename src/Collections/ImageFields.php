<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{ImageField};

/**
 * Class ImageFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class ImageFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : ImageFields
    {
        return new self($fields, ImageField::class);
    }
    
    public function label(string $value): ImageFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function name(string $value): ImageFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function upload(bool $value = true): ImageFields
    {
        foreach ($this->result as $f) {
            $f->upload($value);
        }
        return $this;
    }
    
    
    public function crop(bool $value = true): ImageFields
    {
        foreach ($this->result as $f) {
            $f->crop($value);
        }
        return $this;
    }
    
    
    public function aspect_ratio($value): ImageFields
    {
        foreach ($this->result as $f) {
            $f->aspect_ratio($value);
        }
        return $this;
    }
    
    
    public function disk(string $value): ImageFields
    {
        foreach ($this->result as $f) {
            $f->disk($value);
        }
        return $this;
    }
    
    
    public function prefix(string $value): ImageFields
    {
        foreach ($this->result as $f) {
            $f->prefix($value);
        }
        return $this;
    }
    
    
}