<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SummernoteField extends Field
{ 

    protected $result = ['type' => 'summernote']; 

    public function name(string $value): SummernoteField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SummernoteField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): SummernoteField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    }