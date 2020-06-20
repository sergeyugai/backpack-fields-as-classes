<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Select2FromAjaxField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select2_from_ajax Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select2_from_array](https://backpackforlaravel.com/uploads/docs-4-1/fields/select2_from_array.png)
* 
* <hr>
* 
* <a name="select2-from-ajax"></a>
* 
* Display a select2 that takes its values from an AJAX call.
* 
* ```php
* 
* Of course, you also need to create a controller and routes for the data_source above. Here's an example:
* 
* ```php
* 
* ```php
* 
* **Note:** If you want to also make this field work inside `repeatable` too, your API endpoint will also need to respond to the `keys` parameter, with the actual items that have those keys. For example:
* 
* ```php
 */
class Select2FromAjaxField extends Field
{ 

    protected $result = ['type' => 'select2_from_ajax']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2FromAjaxField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Select2FromAjaxField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): Select2FromAjaxField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2FromAjaxField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2FromAjaxField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function data_source($value): Select2FromAjaxField
    {
        $this->offsetSet('data_source', $value);
        return $this;
    }
    
    
    public function placeholder(string $value): Select2FromAjaxField
    {
        $this->offsetSet('placeholder', $value);
        return $this;
    }
    
    
    public function minimum_input_length($value): Select2FromAjaxField
    {
        $this->offsetSet('minimum_input_length', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2FromAjaxField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function dependencies(array $value): Select2FromAjaxField
    {
        $this->offsetSet('dependencies', $value);
        return $this;
    }
    
    
    public function method(string $value): Select2FromAjaxField
    {
        $this->offsetSet('method', $value);
        return $this;
    }
    
    
    public function include_all_form_fields(bool $value = true): Select2FromAjaxField
    {
        $this->offsetSet('include_all_form_fields', $value);
        return $this;
    }
    
    
}