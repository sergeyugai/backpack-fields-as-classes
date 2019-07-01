<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class SelectFromArrayColumn extends Column
{ 

    protected $result = ['type' => 'select_from_array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SelectFromArrayColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): SelectFromArrayColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SelectFromArrayColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): SelectFromArrayColumn
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