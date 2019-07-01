<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class RangeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#range Documentation
 */
class RangeField extends Field
{ 

    protected $result = ['type' => 'range']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RangeField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): RangeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): RangeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}