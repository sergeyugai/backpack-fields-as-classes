<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class ModelFunctionColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#model_function Documentation
 */
class ModelFunctionColumn extends Column
{ 

    protected $result = ['type' => 'model_function']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ModelFunctionColumn
    {
        return new self($name, $label);
    }
    
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