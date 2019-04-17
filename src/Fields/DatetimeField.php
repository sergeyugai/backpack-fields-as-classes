<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class DatetimeField extends Field
{ 

    protected $result = ['type' => 'datetime']; 

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