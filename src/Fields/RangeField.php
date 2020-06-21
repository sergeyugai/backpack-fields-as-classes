<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RangeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#range Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - radio](https://backpackforlaravel.com/uploads/docs-4-1/fields/radio.png)
* 
* <hr>
* 
* <a name="range"></a>
* 
* Shows an HTML5 range element, allowing the user to drag a cursor left-right, to pick a number from a defined range.
* 
* ```php
 */
class RangeField extends Field
{ 

    protected $type = 'range';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RangeField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): RangeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function attributes(array $value): RangeField
    {
        $this->offsetSet('attributes', $value);
        return $this;
    }
    
    
    public function min($value): RangeField
    {
        $this->offsetSet('min', $value);
        return $this;
    }
    
    
    public function max($value): RangeField
    {
        $this->offsetSet('max', $value);
        return $this;
    }
    
    
}