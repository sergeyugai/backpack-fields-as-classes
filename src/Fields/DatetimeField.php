<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class DatetimeField extends Field
{ 

    protected $result = ['type' => 'datetime']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatetimeField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DatetimeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatetimeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}