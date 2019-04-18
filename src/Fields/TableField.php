<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class TableField extends Field
{ 

    protected $result = ['type' => 'table']; 

    public function name($value): TableField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TableField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function entity_singular(string $value): TableField
    {
        $this->offsetSet('entity_singular', $value);
        return $this;
    }
    
    
    public function columns(array $value): TableField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('columns', $value);
        return $this;
    }
    
    
    public function desc(string $value): TableField
    {
        $this->offsetSet('desc', $value);
        return $this;
    }
    
    
    public function price(string $value): TableField
    {
        $this->offsetSet('price', $value);
        return $this;
    }
    
    
    public function max($value): TableField
    {
        $this->offsetSet('max', $value);
        return $this;
    }
    
    
    public function min($value): TableField
    {
        $this->offsetSet('min', $value);
        return $this;
    }
    
    
}