<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectGroupedField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select_grouped Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select](https://backpackforlaravel.com/uploads/docs-4-1/fields/select.png)
* 
* 
* <hr>
* 
* 
* <a name="select-grouped"></a>
* 
* Display a select where the options are grouped by a second entity (like Categories).
* 
* ```php
 */
class SelectGroupedField extends Field
{ 

    protected $result = ['type' => 'select_grouped']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectGroupedField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectGroupedField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectGroupedField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectGroupedField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectGroupedField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function group_by(string $value): SelectGroupedField
    {
        $this->offsetSet('group_by', $value);
        return $this;
    }
    
    
    public function group_by_attribute(string $value): SelectGroupedField
    {
        $this->offsetSet('group_by_attribute', $value);
        return $this;
    }
    
    
    public function group_by_relationship_back(string $value): SelectGroupedField
    {
        $this->offsetSet('group_by_relationship_back', $value);
        return $this;
    }
    
    
}