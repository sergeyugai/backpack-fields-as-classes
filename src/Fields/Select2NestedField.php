<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Select2NestedField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#select2_nested Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select2_multiple](https://backpackforlaravel.com/uploads/docs-3-5/fields/select2_multiple.png)
* 
* <a name="select2-nested"></a>
* 
* Display a select2 with the values ordered hierarchically and indented, for an entity where you use Reorder. Please mind that the connected model needs:
* - a ```children()``` relationship pointing to itself;
* - the usual ```lft```, ```rgt```, ```depth``` attributes;
* 
* ```php
 */
class Select2NestedField extends Field
{ 

    protected $result = ['type' => 'select2_nested']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2NestedField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): Select2NestedField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): Select2NestedField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2NestedField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2NestedField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2NestedField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
}