<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class DateField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#date Documentation
 */
class DateField extends Field
{ 

    protected $result = ['type' => 'date']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DateField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DateField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DateField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}