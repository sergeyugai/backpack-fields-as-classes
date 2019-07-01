<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SummernoteField extends Field
{ 

    protected $result = ['type' => 'summernote']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SummernoteField
    {
        return new self($name, $label);
    }
    
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
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}