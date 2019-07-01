<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class HiddenField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#hidden Documentation
 */
class HiddenField extends Field
{ 

    protected $result = ['type' => 'hidden']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : HiddenField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): HiddenField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
}