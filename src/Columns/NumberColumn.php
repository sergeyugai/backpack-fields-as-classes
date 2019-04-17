<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class NumberColumn extends Column
{ 

    protected $result = ['type' => 'number']; 

    public function name(string $value): NumberColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): NumberColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function prefix(string $value): NumberColumn
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function suffix(string $value): NumberColumn
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
    public function decimals(string $value): NumberColumn
    {
        $this->offsetSet('decimals', $value);
        return $this;
    }
    
    }