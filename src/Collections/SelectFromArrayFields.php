<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{SelectFromArrayField};

/**
 * Class SelectFromArrayFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class SelectFromArrayFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : SelectFromArrayFields
    {
        return new self($fields, SelectFromArrayField::class);
    }
    
    public function label(string $value): SelectFromArrayFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function options(array $value): SelectFromArrayFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
    public function allows_null(bool $value = true): SelectFromArrayFields
    {
        foreach ($this->result as $f) {
            $f->allows_null($value);
        }
        return $this;
    }
    
    
    public function default(string $value): SelectFromArrayFields
    {
        foreach ($this->result as $f) {
            $f->default($value);
        }
        return $this;
    }
    
    
    public function allows_multiple(bool $value = true): SelectFromArrayFields
    {
        foreach ($this->result as $f) {
            $f->allows_multiple($value);
        }
        return $this;
    }
    
    
}