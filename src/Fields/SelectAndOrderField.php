<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SelectAndOrderField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#select_and_order Documentation
 * 
* Input preview:
* 
* ![CRUD Field - select2_grouped](https://backpackforlaravel.com/uploads/docs-4-1/fields/select2_grouped.png)
* 
* 
* <hr>
* 
* <a name="select_and_order"></a>
* 
* Display items on two columns and let the user drag&drop between them to choose which items are selected an which are not, and reorder the selected items with drag&drop.
* 
* Its definition is exactly as ```select_from_array```, but the value will be stored as JSON in the database: ```["3","5","7","6"]```, so it needs the attribute to be cast to array on the Model:
* 
* ```php
* 
* Definition:
* 
* ```php
* 
* Also possible:
* 
* ```php
 */
class SelectAndOrderField extends Field
{ 

    protected $result = ['type' => 'select_and_order']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectAndOrderField
    {
        return new self($name, $label);
    }
    
    public function featured(string $value): SelectAndOrderField
    {
        $this->offsetSet('featured', $value);
        return $this;
    }
    
    
    public function label(string $value): SelectAndOrderField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(string $value): SelectAndOrderField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
}