<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ModelFunctionAttributeColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#model_function_attribute Documentation
 * 
* **Note:** When displaying this column's value, the text is not escaped. That is intentional. This way, you can use it to show labels, color text, italic, bold, links, etc. If you might have malicious JS or CSS in your values, you can create a new escaped field yourself. But it's probably better to treat the problem at the source, and prevent that JS and CSS from reaching your DB in the first place.
* 
* <hr>
* 
* <a name="model_function_attribute"></a>
* 
* 
* If the function you're trying to use returns an object, not a string, you can use the model_function_attribute column, which will output the attribute on the function result. Its definition is:
* ```php
 */
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