<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class AddressAlgoliaField extends Field
{ 

    protected $result = ['type' => 'address_algolia']; 

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
    
    
    public function store_as_json(bool $value): AddressAlgoliaField
    {
        $this->offsetSet('store_as_json', $value);
        return $this;
    }
    
    }