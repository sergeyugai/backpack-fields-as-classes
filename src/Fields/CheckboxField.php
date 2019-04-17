<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class CheckboxField extends Field
{ 

    protected $result = ['type' => 'checkbox']; 

    public function name(string $value): CheckboxField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckboxField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }