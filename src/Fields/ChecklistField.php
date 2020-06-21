<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ChecklistField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#checklist Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - checkbox](https://backpackforlaravel.com/uploads/docs-4-1/fields/checkbox.png)
* 
* <hr>
* 
* <a name="checklist"></a>
* 
* ```php
 */
class ChecklistField extends Field
{ 

    protected $type = 'checklist';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ChecklistField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): ChecklistField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): ChecklistField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): ChecklistField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): ChecklistField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function pivot(bool $value = true): ChecklistField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
}