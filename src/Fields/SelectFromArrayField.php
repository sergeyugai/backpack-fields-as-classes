<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SelectFromArrayField extends Field
{ 

    protected $result = ['type' => 'select_from_array']; 

    public function name(string $value): SelectFromArrayField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SelectFromArrayField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): SelectFromArrayField
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
    
    
    public function allows_null(bool $value = true): SelectFromArrayField
    {
        $this->offsetSet('allows_null', $value);
        return $this;
    }
    
    
    public function default(string $value): SelectFromArrayField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function allows_multiple(bool $value = true): SelectFromArrayField
    {
        $this->offsetSet('allows_multiple', $value);
        return $this;
    }
    
    
}