<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class ClosureColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#closure Documentation
 */
class ClosureColumn extends Column
{ 

    protected $result = ['type' => 'closure']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ClosureColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ClosureColumn
    {
        $this->offsetSet('name', $value);
        return $this;
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