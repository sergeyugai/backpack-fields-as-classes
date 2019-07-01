<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class CheckColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#check Documentation
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