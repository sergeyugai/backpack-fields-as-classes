<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class CkeditorField extends Field
{ 

    protected $result = ['type' => 'ckeditor']; 

    public function name(string $value): CkeditorField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CkeditorField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function extra_plugins(array $value): CkeditorField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('extra_plugins', $value);
        return $this;
    }
    
    
    public function options(array $value): CkeditorField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function autoGrow_minHeight($value): CkeditorField
    {
        $this->offsetSet('autoGrow_minHeight', $value);
        return $this;
    }
    
    
    public function autoGrow_bottomSpace($value): CkeditorField
    {
        $this->offsetSet('autoGrow_bottomSpace', $value);
        return $this;
    }
    
    
    public function removePlugins(string $value): CkeditorField
    {
        $this->offsetSet('removePlugins', $value);
        return $this;
    }
    
    
}