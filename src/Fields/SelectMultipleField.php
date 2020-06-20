<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectMultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select_multiple (n-n relationship) Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select2](https://backpackforlaravel.com/uploads/docs-4-1/fields/select2_nested.png)
* 
* <hr>
* 
* <a name="select-multiple"></a>
* 
* Show a Select with the names of the connected entity and let the user select any number of them.
* Your relationships should already be defined on your models as hasMany() or belongsToMany().
* 
* ```php
 */
class SelectMultipleField extends Field
{ 

    protected $result = ['type' => 'select_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectMultipleField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectMultipleField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectMultipleField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function pivot(bool $value = true): SelectMultipleField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectMultipleField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function options($value): SelectMultipleField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}