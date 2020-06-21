<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select (1-n relationship) Documentation
 * 
* 
* <hr>
* 
* <a name="select"></a>
* 
* Show a Select with the names of the connected entity and let the user select one of them.
* Your relationships should already be defined on your models as hasOne() or belongsTo().
* 
* ```php
 */
class SelectField extends Field
{ 

    protected $type = 'select';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SelectField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity(string $value): SelectField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): SelectField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): SelectField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function options($value): SelectField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}