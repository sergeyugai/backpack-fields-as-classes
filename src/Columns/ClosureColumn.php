<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ClosureColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#closure Documentation
 * 
* <hr>
* 
* <a name="closure"></a>
* 
* 
* Show custom HTML based on a closure you specify in your EntityCrudController. Please note this column does not escape HTML before rendering. You need to do that yourself, if you consider it necessary.
* 
* ```php
 */
class ClosureColumn extends Column
{ 

    protected $result = ['type' => 'closure']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ClosureColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): ClosureColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function function($value): ClosureColumn
    {
        $this->offsetSet('function', $value);
        return $this;
    }
    
    
}