<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ImageColumn extends Column
{ 

    protected $result = ['type' => 'image']; 

    public function name(string $value): ImageColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ImageColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function prefix(string $value): ImageColumn
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function height(string $value): ImageColumn
    {
        $this->offsetSet('height', $value);
        return $this;
    }
    
    
    public function width(string $value): ImageColumn
    {
        $this->offsetSet('width', $value);
        return $this;
    }
    
    
}