<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ViewField extends Field
{ 

    protected $result = ['type' => 'view']; 

    public function name(string $value): ViewField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function view(string $value): ViewField
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    }