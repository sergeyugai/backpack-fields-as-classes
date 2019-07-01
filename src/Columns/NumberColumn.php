<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class NumberColumn extends Column
{ 

    protected $result = ['type' => 'number']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : NumberColumn
    {
        return new self($name, $label);
    }
    
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
    
    
    public function decimals($value): NumberColumn
    {
        $this->offsetSet('decimals', $value);
        return $this;
    }
    
    
    public function dec_point(string $value): NumberColumn
    {
        $this->offsetSet('dec_point', $value);
        return $this;
    }
    
    
    public function thousands_sep(string $value): NumberColumn
    {
        $this->offsetSet('thousands_sep', $value);
        return $this;
    }
    
    
}