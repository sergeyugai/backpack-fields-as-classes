<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class PhoneColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#phone Documentation
 * 
* <hr>
* 
* <a name="phone"></a>
* 
* The phone column will output the phone number from the database (truncated to 254 characters if needed), with a ```tel:``` link so that users on mobile can click them to call (or with Skype or similar browser extensions). Its definition is:
* ```php
 */
class PhoneColumn extends Column
{ 

    protected $result = ['type' => 'phone']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : PhoneColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): PhoneColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): PhoneColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function limit($value): PhoneColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}