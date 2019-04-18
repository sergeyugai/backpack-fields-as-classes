<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class BooleanColumn extends Column
{ 

    protected $result = ['type' => 'boolean']; 

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