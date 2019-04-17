<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class TimeField extends Field
{ 

    protected $result = ['type' => 'time']; 

    public function name(string $value): TimeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TimeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }