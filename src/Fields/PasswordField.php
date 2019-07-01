<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class PasswordField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#password Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - page_or_link](https://backpackforlaravel.com/uploads/docs-3-5/fields/page_or_link.png)
* 
* <a name="password"></a>
* 
* ```php
 */
class PasswordField extends Field
{ 

    protected $result = ['type' => 'password']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : PasswordField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): PasswordField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): PasswordField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}