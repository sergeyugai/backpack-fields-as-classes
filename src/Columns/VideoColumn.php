<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class VideoColumn extends Column
{ 

    protected $result = ['type' => 'video']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : VideoColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): VideoColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): VideoColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}