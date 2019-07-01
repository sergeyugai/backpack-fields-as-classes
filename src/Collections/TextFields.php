<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{TextField};

/**
 * Class TextFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class TextFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : TextFields
    {
        return new self($fields, TextField::class);
    }
    
    public function name(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function prefix(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->prefix($value);
        }
        return $this;
    }
    
    
    public function suffix(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->suffix($value);
        }
        return $this;
    }
    
    
    public function default(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->default($value);
        }
        return $this;
    }
    
    
    public function hint(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->hint($value);
        }
        return $this;
    }
    
    
    public function attributes(array $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->attributes($value);
        }
        return $this;
    }
    
    
    public function placeholder(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->placeholder($value);
        }
        return $this;
    }
    
    
    public function class($value): TextFields
    {
        foreach ($this->result as $f) {
            $f->class($value);
        }
        return $this;
    }
    
    
    public function wrapperAttributes(array $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->wrapperAttributes($value);
        }
        return $this;
    }
    
    
    public function readonly(string $value): TextFields
    {
        foreach ($this->result as $f) {
            $f->readonly($value);
        }
        return $this;
    }
    
    
}