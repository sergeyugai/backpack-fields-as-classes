<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class Select2Field 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#select2 (1-n relationship) Documentation
 */
class Select2Field extends Field
{ 

    protected $result = ['type' => 'select2']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : Select2Field
    {
        return new self($name, $label);
    }
    
    public function label(string $value): Select2Field
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): Select2Field
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function entity(string $value): Select2Field
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function attribute(string $value): Select2Field
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function model(string $value): Select2Field
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function default($value): Select2Field
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function options($value): Select2Field
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}