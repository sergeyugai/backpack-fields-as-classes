<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class AddressAlgoliaField extends Field
{ 

    protected $result = ['type' => 'address_algolia']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : AddressAlgoliaField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): AddressAlgoliaField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): AddressAlgoliaField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function store_as_json(bool $value = true): AddressAlgoliaField
    {
        $this->offsetSet('store_as_json', $value);
        return $this;
    }
    
    
}