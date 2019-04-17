<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class EmailColumn extends Column
{ 

    protected $result = ['type' => 'email']; 

    public function name(string $value): EmailColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): EmailColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function limit(string $value): EmailColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    }