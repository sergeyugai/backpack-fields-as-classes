<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class SimplemdeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#simplemde Documentation
 */
class SimplemdeField extends Field
{ 

    protected $result = ['type' => 'simplemde']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SimplemdeField
    {
        return new self($name, $label);
    }
    
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
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('simplemdeAttributes', $value);
        return $this;
    }
    
    
    public function promptURLs(bool $value = true): SimplemdeField
    {
        $this->offsetSet('promptURLs', $value);
        return $this;
    }
    
    
    public function status(bool $value = true): SimplemdeField
    {
        $this->offsetSet('status', $value);
        return $this;
    }
    
    
    public function spellChecker(bool $value = true): SimplemdeField
    {
        $this->offsetSet('spellChecker', $value);
        return $this;
    }
    
    
    public function forceSync(bool $value = true): SimplemdeField
    {
        $this->offsetSet('forceSync', $value);
        return $this;
    }
    
    
    public function simplemdeAttributesRaw($value): SimplemdeField
    {
        $this->offsetSet('simplemdeAttributesRaw', $value);
        return $this;
    }
    
    
}