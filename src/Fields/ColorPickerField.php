<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ColorPickerField extends Field
{ 

    protected $result = ['type' => 'color_picker']; 

    public function label(string $value): ColorPickerField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): ColorPickerField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function color_picker_options(array $value): ColorPickerField
    {
        $this->offsetSet('color_picker_options', $value);
        return $this;
    }
    
    }