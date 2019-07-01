<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class BooleanColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#boolean Documentation
 */
class BooleanColumn extends Column
{ 

    protected $result = ['type' => 'boolean']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : BooleanColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): BooleanColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): BooleanColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): BooleanColumn
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}