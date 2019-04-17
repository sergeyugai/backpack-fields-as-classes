<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class CheckColumn extends Column
{ 

    protected $result = ['type' => 'check']; 

    public function name(string $value): CheckColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }