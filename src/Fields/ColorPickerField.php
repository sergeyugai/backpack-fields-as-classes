<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ColorPickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#color_picker Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - color](https://backpackforlaravel.com/uploads/docs-4-1/fields/color.png)
* 
* <hr>
* 
* <a name="color-picker"></a>
* 
* Show a pretty colour picker using [Bootstrap Colorpicker](https://itsjavi.com/bootstrap-colorpicker/).
* 
* ```php
 */
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
    
    
    public function default(string $value): ColorPickerField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function color_picker_options(array $value): ColorPickerField
    {
        $this->offsetSet('color_picker_options', $value);
        return $this;
    }
    
    
}