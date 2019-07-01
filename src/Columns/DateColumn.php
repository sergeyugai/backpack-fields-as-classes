<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class DateColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#date Documentation
 * 
* <a name="date"></a>
* 
* 
* The date column will show a localized date in the default date format (as specified in the ```config/backpack/base.php``` file), whether the attribute is casted as date in the model or not:
* 
* ```php
 */
class DateColumn extends Column
{ 

    protected $result = ['type' => 'date']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DateColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DateColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DateColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function format(string $value): DateColumn
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    
}