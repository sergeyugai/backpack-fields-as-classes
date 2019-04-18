<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class IconPickerField extends Field
{ 

    protected $result = ['type' => 'icon_picker']; 

    public function label(string $value): IconPickerField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): IconPickerField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function iconset(string $value): IconPickerField
    {
        $this->offsetSet('iconset', $value);
        return $this;
    }
    
    
}