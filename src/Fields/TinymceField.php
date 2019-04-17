<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class TinymceField extends Field
{ 

    protected $result = ['type' => 'tinymce']; 

    public function name(string $value): TinymceField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TinymceField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }