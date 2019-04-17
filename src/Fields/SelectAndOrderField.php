<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SelectAndOrderField extends Field
{ 

    protected $result = ['type' => 'select_and_order']; 

    public function name(string $value): SelectAndOrderField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SelectAndOrderField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): SelectAndOrderField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function 1(string $value): SelectAndOrderField
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    
    public function 2(string $value): SelectAndOrderField
    {
        $this->offsetSet('2', $value);
        return $this;
    }
    
    }