<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectFromArrayField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#select_from_array Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select_and_order](https://backpackforlaravel.com/uploads/docs-3-5/fields/select_and_order.png)
* 
* 
* <a name="select-from-array"></a>
* 
* Display a select with the values you want:
* 
* ```php
 */
class SelectFromArrayField extends Field
{ 

    protected $result = ['type' => 'select_from_array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectFromArrayField
    {
        return new self($name, $label);
    }
    
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