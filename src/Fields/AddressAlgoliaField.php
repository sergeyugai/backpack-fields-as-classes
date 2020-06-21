<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class AddressAlgoliaField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#address_algolia Documentation
 * 
* 
* <a name="default-field-types"></a>
* ## Default Field Types
* 
* <a name="address_algolia"></a>
* 
* Use [Algolia Places autocomplete](https://community.algolia.com/places/) to help users type their address faster. With the ```store_as_json``` option, it will store the address, postcode, city, country, latitude and longitude in a JSON in the database. Without it, it will just store the address string.
* 
* ```php
 */
class AddressAlgoliaField extends Field
{ 

    protected $type = 'address_algolia';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : AddressAlgoliaField
    {
        return new self($name, $label);
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