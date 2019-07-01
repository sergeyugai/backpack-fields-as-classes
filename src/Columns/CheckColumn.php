<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class CheckColumn extends Column
{ 

    protected $result = ['type' => 'check']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CheckColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CheckColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}