<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class TextColumn extends Column
{ 

    protected $result = ['type' => 'text']; 

    public function name(string $value): TextColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TextColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function prefix(string $value): TextColumn
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function suffix(string $value): TextColumn
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
    public function limit($value): TextColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}