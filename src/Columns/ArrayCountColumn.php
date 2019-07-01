<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ArrayCountColumn extends Column
{ 

    protected $result = ['type' => 'array_count']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ArrayCountColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ArrayCountColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ArrayCountColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function suffix(string $value): ArrayCountColumn
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
}