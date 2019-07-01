<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class ColorPickerField extends Field
{ 

    protected $result = ['type' => 'color_picker']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ColorPickerField
    {
        return new self($name, $label);
    }
    
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
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('color_picker_options', $value);
        return $this;
    }
    
    
}