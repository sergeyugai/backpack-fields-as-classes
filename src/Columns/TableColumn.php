<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class TableColumn extends Column
{ 

    protected $result = ['type' => 'table']; 

    public function name( $value): TableColumn
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