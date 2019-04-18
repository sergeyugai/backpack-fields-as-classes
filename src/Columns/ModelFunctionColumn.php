<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ModelFunctionColumn extends Column
{ 

    protected $result = ['type' => 'model_function']; 

    public function name(string $value): ModelFunctionColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ModelFunctionColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function function_name(string $value): ModelFunctionColumn
    {
        $this->offsetSet('function_name', $value);
        return $this;
    }
    
    
    public function function_parameters(array $value): ModelFunctionColumn
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
    
    
    public function limit($value): ModelFunctionColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}