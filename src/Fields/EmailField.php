<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class EmailField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#email Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - easymde](https://backpackforlaravel.com/uploads/docs-4-1/fields/easymde.png)
* 
* <hr>
* 
* <a name="email"></a>
* 
* ```php
 */
class EmailField extends Field
{ 

    protected $result = ['type' => 'email']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EmailField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): EmailField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}