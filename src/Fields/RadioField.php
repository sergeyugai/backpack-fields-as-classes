<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RadioField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#radio Documentation
 * 
* 
* <hr>
* 
* <a name="radio"></a>
* 
* Show radios according to an associative array you give the input and let the user pick from them. You can choose for the radio options to be displayed inline or one-per-line.
* 
* ```php
 */
class RadioField extends Field
{ 

    protected $result = ['type' => 'radio']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RadioField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): RadioField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): RadioField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    public function inline(bool $value = true): RadioField
    {
        $this->offsetSet('inline', $value);
        return $this;
    }
    
    
}