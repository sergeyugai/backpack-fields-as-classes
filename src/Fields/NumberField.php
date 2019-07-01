<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class NumberField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#number Documentation
 */
class NumberField extends Field
{ 

    protected $result = ['type' => 'number']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : NumberField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): NumberField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): NumberField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function attributes(array $value): NumberField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('attributes', $value);
        return $this;
    }
    
    
    public function prefix(string $value): NumberField
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function suffix(string $value): NumberField
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
}