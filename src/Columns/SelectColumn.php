<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class SelectColumn extends Column
{ 

    protected $result = ['type' => 'select']; 

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