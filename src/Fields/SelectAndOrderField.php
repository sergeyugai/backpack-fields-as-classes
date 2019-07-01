<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class SelectAndOrderField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#select_and_order Documentation
 */
class SelectAndOrderField extends Field
{ 

    protected $result = ['type' => 'select_and_order']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectAndOrderField
    {
        return new self($name, $label);
    }
    
    public function featured(string $value): SelectAndOrderField
    {
        $this->offsetSet('featured', $value);
        return $this;
    }
    
    
    public function name(string $value): SelectAndOrderField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SelectAndOrderField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(string $value): SelectAndOrderField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function 0(string $value): SelectAndOrderField
    {
        $this->offsetSet('0', $value);
        return $this;
    }
    
    
    public function 1(string $value): SelectAndOrderField
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    
}