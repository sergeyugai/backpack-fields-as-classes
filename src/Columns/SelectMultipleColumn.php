<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class SelectMultipleColumn extends Column
{ 

    protected $result = ['type' => 'select_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectMultipleColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectMultipleColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectMultipleColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectMultipleColumn
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectMultipleColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectMultipleColumn
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}