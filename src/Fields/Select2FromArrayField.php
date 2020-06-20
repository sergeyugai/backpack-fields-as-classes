<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Select2FromArrayField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select2_from_array Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select_from_array](https://backpackforlaravel.com/uploads/docs-4-1/fields/select_from_array.png)
* 
* <hr>
* 
* <a name="select2-from-array"></a>
* 
* Display a select2 with the values you want:
* 
* ```php
 */
class Select2FromArrayField extends Field
{ 

    protected $result = ['type' => 'select2_from_array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2FromArrayField
    {
        return new self($name, $label);
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
    
    
    public function allows_null(bool $value = true): Select2FromArrayField
    {
        $this->offsetSet('allows_null', $value);
        return $this;
    }
    
    
    public function default(string $value): Select2FromArrayField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function allows_multiple(bool $value = true): Select2FromArrayField
    {
        $this->offsetSet('allows_multiple', $value);
        return $this;
    }
    
    
}