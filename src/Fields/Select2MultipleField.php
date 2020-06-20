<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Select2MultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select2_multiple (n-n relationship) Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select_multiple](https://backpackforlaravel.com/uploads/docs-4-1/fields/select_multiple.png)
* 
* 
* <hr>
* 
* <a name="select2-multiple"></a>
* 
* [Works just like the SELECT field, but prettier]
* 
* Show a Select2 with the names of the connected entity and let the user select any number of them.
* Your relationships should already be defined on your models as hasMany() or belongsToMany().
* 
* ```php
 */
class Select2MultipleField extends Field
{ 

    protected $result = ['type' => 'select2_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2MultipleField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Select2MultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2MultipleField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2MultipleField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function pivot(bool $value = true): Select2MultipleField
    {
        $this->offsetSet('pivot', $value);
        return $this;
    }
    
    
    public function select_all(bool $value = true): Select2MultipleField
    {
        $this->offsetSet('select_all', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2MultipleField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function options($value): Select2MultipleField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}