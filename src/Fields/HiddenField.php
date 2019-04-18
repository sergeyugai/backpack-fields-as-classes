<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class HiddenField extends Field
{ 

    protected $result = ['type' => 'hidden']; 

    public function name(string $value): HiddenField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
}