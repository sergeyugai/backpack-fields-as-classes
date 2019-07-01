<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class AddressGoogleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#address_google Documentation
 */
class AddressGoogleField extends Field
{ 

    protected $result = ['type' => 'address_google']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : AddressGoogleField
    {
        return new self($name, $label);
    }
    
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