<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class MonthField extends Field
{ 

    protected $result = ['type' => 'month']; 

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