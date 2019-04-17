<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class DateColumn extends Column
{ 

    protected $result = ['type' => 'date']; 

    public function name(string $value): DateColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DateColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function format(string $value): DateColumn
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    }