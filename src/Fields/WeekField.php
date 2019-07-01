<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class WeekField extends Field
{ 

    protected $result = ['type' => 'week']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : WeekField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): WeekField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): WeekField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}