<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class SelectMultipleColumn extends Column
{ 

    protected $result = ['type' => 'select_multiple']; 

    public function label(string $value): SelectMultipleColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectMultipleColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectMultipleColumn
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectMultipleColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectMultipleColumn
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}