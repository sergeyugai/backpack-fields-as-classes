<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class AddressGoogleField extends Field
{ 

    protected $result = ['type' => 'address_google']; 

    public function name(string $value): AddressGoogleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): AddressGoogleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function store_as_json(bool $value = true): AddressGoogleField
    {
        $this->offsetSet('store_as_json', $value);
        return $this;
    }
    
    
    public function key(string $value): AddressGoogleField
    {
        $this->offsetSet('key', $value);
        return $this;
    }
    
    
}