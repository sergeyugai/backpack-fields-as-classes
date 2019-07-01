<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class HiddenField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#hidden Documentation
 * 
* PLEASE NOTE the enum field only works for MySQL databases.
* 
* Input preview: 
* 
* ![CRUD Field - enum](https://backpackforlaravel.com/uploads/docs-3-5/fields/enum.png)
* 
* <a name="hidden"></a>
* 
* Include an <input type="hidden"> in the form.
* 
* ```php
 */
class HiddenField extends Field
{ 

    protected $result = ['type' => 'hidden']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : HiddenField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): HiddenField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
}