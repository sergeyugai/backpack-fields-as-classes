<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class VideoColumn extends Column
{ 

    protected $result = ['type' => 'video']; 

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