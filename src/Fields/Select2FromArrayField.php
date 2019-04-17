<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class Select2FromArrayField extends Field
{ 

    protected $result = ['type' => 'select2_from_array']; 

    public function name(string $value): Select2FromArrayField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): Select2FromArrayField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): Select2FromArrayField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function allows_null(bool $value): Select2FromArrayField
    {
        $this->offsetSet('allows_null', $value);
        return $this;
    }
    
    
    public function default(string $value): Select2FromArrayField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function allows_multiple(bool $value): Select2FromArrayField
    {
        $this->offsetSet('allows_multiple', $value);
        return $this;
    }
    
    }