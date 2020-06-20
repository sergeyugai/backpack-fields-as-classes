<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class EmailColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#email Documentation
 * 
* <hr>
* 
* <a name="email"></a>
* 
* The email column will output the email address in the database (truncated to 254 characters if needed), with a ```mailto:``` link towards the full email. Its definition is:
* ```php
 */
class EmailColumn extends Column
{ 

    protected $result = ['type' => 'email']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EmailColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): EmailColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EmailColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function limit($value): EmailColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}