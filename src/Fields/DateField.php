<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class DateField extends Field
{ 

    protected $result = ['type' => 'date']; 

    public function name(string $value): DateField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DateField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }