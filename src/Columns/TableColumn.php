<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class TableColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#table Documentation
 */
class TableColumn extends Column
{ 

    protected $result = ['type' => 'table']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TableColumn
    {
        return new self($name, $label);
    }
    
    public function name($value): TableColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TableColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function columns(array $value): TableColumn
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
    
    
    public function description(string $value): TableColumn
    {
        $this->offsetSet('description', $value);
        return $this;
    }
    
    
    public function price(string $value): TableColumn
    {
        $this->offsetSet('price', $value);
        return $this;
    }
    
    
    public function obs(string $value): TableColumn
    {
        $this->offsetSet('obs', $value);
        return $this;
    }
    
    
}