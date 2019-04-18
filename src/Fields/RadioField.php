<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class RadioField extends Field
{ 

    protected $result = ['type' => 'radio']; 

    public function name(string $value): RadioField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): RadioField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): RadioField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function 1(string $value): RadioField
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    
    public function inline(bool $value = true): RadioField
    {
        $this->offsetSet('inline', $value);
        return $this;
    }
    
    
}