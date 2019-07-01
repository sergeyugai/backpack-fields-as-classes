<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ModelFunctionColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#model_function Documentation
 * 
* <a name="model_function"></a>
* 
* 
* The model_function column will output a function on your main model. Its definition is:
* ```php
* For this example, if your model would feature this method, it would return the link to that entity:
* ```php
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
        $this->offsetSet('function_parameters', $value);
        return $this;
    }
    
    
    public function limit($value): ModelFunctionColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}