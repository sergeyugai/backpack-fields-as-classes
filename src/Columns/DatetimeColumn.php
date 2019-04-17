<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class DatetimeColumn extends Column
{ 

    protected $result = ['type' => 'datetime']; 

    public function name(string $value): DatetimeColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatetimeColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function format(string $value): DatetimeColumn
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    }