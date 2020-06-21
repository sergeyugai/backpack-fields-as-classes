<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class DateField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#date Documentation
 * 
* <a name="date"></a>
* 
* ```php
 */
class DateField extends Field
{ 

    protected $type = 'date';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DateField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): DateField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}