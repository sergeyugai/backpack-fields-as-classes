<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class RadioColumn extends Column
{ 

    protected $result = ['type' => 'radio']; 

    public function name(string $value): RadioColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): RadioColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): RadioColumn
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function 1(string $value): RadioColumn
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    }