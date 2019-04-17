<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class BrowseField extends Field
{ 

    protected $result = ['type' => 'browse']; 

    public function name(string $value): BrowseField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): BrowseField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }