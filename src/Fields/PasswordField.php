<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class PasswordField extends Field
{ 

    protected $result = ['type' => 'password']; 

    public function name(string $value): PasswordField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): PasswordField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    }