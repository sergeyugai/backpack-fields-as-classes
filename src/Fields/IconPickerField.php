<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class IconPickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#icon_picker Documentation
 * 
* <a name="icon-picker"></a>
* 
* [/block]
* Show an icon picker. Supported icon sets are fontawesome, glyphicon, ionicon, weathericon, mapicon, octicon, typicon, elusiveicon, materialdesign as per the jQuery plugin, [bootstrap-iconpicker](http://victor-valencia.github.io/bootstrap-iconpicker/).
* 
* The stored value will be the class name (ex: fa-home).
* 
* ```php
 */
class IconPickerField extends Field
{ 

    protected $result = ['type' => 'icon_picker']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : IconPickerField
    {
        return new self($name, $label);
    }
    
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