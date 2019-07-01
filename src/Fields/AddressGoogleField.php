<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class AddressGoogleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#address_google Documentation
 * 
* > **Use attribute casting.** For information stored as JSON in the database, it's recommended that you use [attribute casting](https://mattstauffer.co/blog/laravel-5.0-eloquent-attribute-casting) to ```array``` or ```object```. That way, every time you get the info from the database you'd get it in a usable format.
* 
* 
* Input preview: 
* 
* ![CRUD Field - address](https://backpackforlaravel.com/uploads/docs-3-5/fields/address.png)
* 
* <a name="address_google"></a>
* 
* Use [Google Places Search](https://developers.google.com/places/web-service/search) to help users type their address faster. With the ```store_as_json``` option, it will store the address, postcode, city, country, latitude and longitude in a JSON in the database. Without it, it will just store the complete address string.
* 
* ```php
* 
* Using Google Places API is dependant on using an API Key. Please [get an API key](https://console.cloud.google.com/apis/credentials) - you do have to configure billing, but you qualify for $200/mo free usage, which covers most use cases. Then copy-paste that key as your ```services.google_places.key``` value. So inside your ```config/services.php``` please add the items below:
* 
* ```php
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