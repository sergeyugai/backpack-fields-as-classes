<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class SimplemdeField extends Field
{ 

    protected $result = ['type' => 'simplemde']; 

    public function name(string $value): SimplemdeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SimplemdeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function simplemdeAttributes(array $value): SimplemdeField
    {
        $this->offsetSet('simplemdeAttributes', $value);
        return $this;
    }
    
    
    public function promptURLs(bool $value): SimplemdeField
    {
        $this->offsetSet('promptURLs', $value);
        return $this;
    }
    
    
    public function status(bool $value): SimplemdeField
    {
        $this->offsetSet('status', $value);
        return $this;
    }
    
    
    public function spellChecker(bool $value): SimplemdeField
    {
        $this->offsetSet('spellChecker', $value);
        return $this;
    }
    
    
    public function forceSync(bool $value): SimplemdeField
    {
        $this->offsetSet('forceSync', $value);
        return $this;
    }
    
    
    public function simplemdeAttributesRaw(string $value): SimplemdeField
    {
        $this->offsetSet('simplemdeAttributesRaw', $value);
        return $this;
    }
    
    }