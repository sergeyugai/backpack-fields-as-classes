<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ArrayColumn extends Column
{ 

    protected $result = ['type' => 'array']; 

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