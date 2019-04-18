<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class ViewColumn extends Column
{ 

    protected $result = ['type' => 'view']; 

    public function name(string $value): ViewColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ViewColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function view(string $value): ViewColumn
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    
}