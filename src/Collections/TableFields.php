<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{TableField};

/**
 * Class TableFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class TableFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : TableFields
    {
        return new self($fields, TableField::class);
    }
    
    public function name($value): TableFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): TableFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function entity_singular(string $value): TableFields
    {
        foreach ($this->result as $f) {
            $f->entity_singular($value);
        }
        return $this;
    }
    
    
    public function columns(array $value): TableFields
    {
        foreach ($this->result as $f) {
            $f->columns($value);
        }
        return $this;
    }
    
    
    public function desc(string $value): TableFields
    {
        foreach ($this->result as $f) {
            $f->desc($value);
        }
        return $this;
    }
    
    
    public function price(string $value): TableFields
    {
        foreach ($this->result as $f) {
            $f->price($value);
        }
        return $this;
    }
    
    
    public function max($value): TableFields
    {
        foreach ($this->result as $f) {
            $f->max($value);
        }
        return $this;
    }
    
    
    public function min($value): TableFields
    {
        foreach ($this->result as $f) {
            $f->min($value);
        }
        return $this;
    }
    
    
}