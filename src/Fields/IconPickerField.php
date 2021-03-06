<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class IconPickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#icon_picker Documentation
 * 
* <hr>
* 
* <a name="icon-picker"></a>
* 
* Show an icon picker. Supported icon sets are fontawesome, glyphicon, ionicon, weathericon, mapicon, octicon, typicon, elusiveicon, materialdesign as per the jQuery plugin, [bootstrap-iconpicker](http://victor-valencia.github.io/bootstrap-iconpicker/).
* 
* The stored value will be the class name (ex: fa-home).
* 
* ```php
 */
class IconPickerField extends Field
{ 

    protected $type = 'icon_picker';

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
    
    
    public function iconset(string $value): IconPickerField
    {
        $this->offsetSet('iconset', $value);
        return $this;
    }
    
    
}