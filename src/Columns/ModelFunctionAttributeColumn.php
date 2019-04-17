<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ModelFunctionAttributeColumn extends Column
{ 

    protected $result = ['type' => 'model_function_attribute']; 

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
        $this->offsetSet('function_parameters', $value);
        return $this;
    }
    
    
    public function attribute(string $value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function limit(string $value): ModelFunctionAttributeColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    }