<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Select2FromAjaxMultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select2_from_ajax_multiple Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select2_from_array](https://backpackforlaravel.com/uploads/docs-4-1/fields/select2_from_array.png)
* 
* <hr>
* 
* <a name="select2-from-ajax-multiple"></a>
* 
* Display a select2 that takes its values from an AJAX call. Same as [select2_from_ajax](#section-select2_from_ajax) above, but allows for multiple items to be selected. The only difference in the field definition is the "pivot" attribute.
* 
* ```php
* 
* Of course, you also need to create a controller and routes for the data_source above. Here's an example:
* 
* ```php
* 
* ```php
* 
* Input preview: 
* 
* ![CRUD Field - select2_from_ajax_multiple](https://backpackforlaravel.com/uploads/docs-4-1/fields/select2_from_ajax_multiple.png)
* 
* **Note:** If you want to also make this field work inside `repeatable` too, your API endpoint will also need to respond to the `keys` parameter, with the actual items that have those keys. For example:
* 
* ```php
 */
class Select2FromAjaxMultipleField extends Field
{ 

    protected $type = 'select2_from_ajax_multiple';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2FromAjaxMultipleField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function data_source($value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('data_source', $value);
        return $this;
    }
    
    
    public function pivot(bool $value = true): Select2FromAjaxMultipleField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function placeholder(string $value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('placeholder', $value);
        return $this;
    }
    
    
    public function minimum_input_length($value): Select2FromAjaxMultipleField
    {
        $this->offsetSet('minimum_input_length', $value);
        return $this;
    }
    
    
    public function include_all_form_fields(bool $value = true): Select2FromAjaxMultipleField
    {
        $this->offsetSet('include_all_form_fields', $value);
        return $this;
    }
    
    
}