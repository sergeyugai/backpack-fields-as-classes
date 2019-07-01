<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class DatetimeColumn extends Column
{ 

    protected $result = ['type' => 'datetime']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatetimeColumn
    {
        return new self($name, $label);
    }
    
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