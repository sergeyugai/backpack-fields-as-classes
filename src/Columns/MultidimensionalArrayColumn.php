<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class MultidimensionalArrayColumn extends Column
{ 

    protected $result = ['type' => 'multidimensional_array']; 

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