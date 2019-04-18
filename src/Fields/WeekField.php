<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class WeekField extends Field
{ 

    protected $result = ['type' => 'week']; 

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