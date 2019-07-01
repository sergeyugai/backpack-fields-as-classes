<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class TextareaField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#textarea Documentation
 */
class TextareaField extends Field
{ 

    protected $result = ['type' => 'textarea']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TextareaField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): TextareaField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TextareaField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}