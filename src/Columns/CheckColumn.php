<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class CheckColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#check Documentation
 * 
* <hr>
* 
* <a name="check"></a>
* 
* Show a favicon with a checked or unchecked box, depending on the given boolean.
* ```php
* 
* <hr>
* 
* <a name="checkbox"></a>
* 
* Shows a checkbox (the form element), and inserts the js logic needed to select/deselect multiple entries. It is mostly used for [the Bulk Delete action](/docs/{{version}}/crud-operation-delete#delete-multiple-items-bulk-delete), and [custom bulk actions](/docs/{{version}}/crud-operations#creating-a-new-operation-with-a-bulk-action-no-interface).
* 
* Shorthand:
* ```php
 */
class CheckColumn extends Column
{ 

    protected $result = ['type' => 'check']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CheckColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CheckColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}