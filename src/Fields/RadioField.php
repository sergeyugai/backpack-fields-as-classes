<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RadioField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#radio Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - password](https://backpackforlaravel.com/uploads/docs-3-5/fields/password.png)
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
    
    public function name(string $value): RadioField
    {
        $this->offsetSet('name', $value);
        return $this;
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
    
    
    public function 0(string $value): RadioField
    {
        $this->offsetSet('0', $value);
        return $this;
    }
    
    
    public function 1(string $value): RadioField
    {
        $this->offsetSet('1', $value);
        return $this;
    }
    
    
    public function inline(bool $value = true): RadioField
    {
        $this->offsetSet('inline', $value);
        return $this;
    }
    
    
}