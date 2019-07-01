<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class MonthField extends Field
{ 

    protected $result = ['type' => 'month']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : MonthField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): MonthField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): MonthField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}