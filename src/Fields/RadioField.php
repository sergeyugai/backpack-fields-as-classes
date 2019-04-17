<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class RadioField extends Field
{ 

    protected $result = ['type' => 'radio']; 

    public function 1(string $value): RadioField
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    
    public function inline(bool $value): RadioField
    {
        $this->offsetSet('inline', $value);
        return $this;
    }
    
    }