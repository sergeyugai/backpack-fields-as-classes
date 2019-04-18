<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ClosureColumn extends Column
{ 

    protected $result = ['type' => 'closure']; 

    public function name(string $value): ClosureColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ClosureColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function function($value): ClosureColumn
    {
        $this->offsetSet('function', $value);
        return $this;
    }
    
    
}