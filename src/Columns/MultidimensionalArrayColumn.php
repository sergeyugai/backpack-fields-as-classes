<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class MultidimensionalArrayColumn extends Column
{ 

    protected $result = ['type' => 'multidimensional_array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : MultidimensionalArrayColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): MultidimensionalArrayColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): MultidimensionalArrayColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function visible_key(string $value): MultidimensionalArrayColumn
    {
        $this->offsetSet('visible_key', $value);
        return $this;
    }
    
    
}