<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class VideoField extends Field
{ 

    protected $result = ['type' => 'video']; 

    public function name(string $value): VideoField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): VideoField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}