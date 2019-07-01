<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ArrayColumn extends Column
{ 

    protected $result = ['type' => 'array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ArrayColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ArrayColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ArrayColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}