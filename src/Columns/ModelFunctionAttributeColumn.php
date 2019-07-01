<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ModelFunctionAttributeColumn extends Column
{ 

    protected $result = ['type' => 'model_function_attribute']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ModelFunctionAttributeColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function function_name(string $value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('function_name', $value);
        return $this;
    }
    
    
    public function function_parameters(array $value): ModelFunctionAttributeColumn
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('function_parameters', $value);
        return $this;
    }
    
    
    public function attribute(string $value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function limit($value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}