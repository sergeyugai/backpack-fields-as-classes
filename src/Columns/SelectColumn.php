<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class SelectColumn extends Column
{ 

    protected $result = ['type' => 'select']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectColumn
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectColumn
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}