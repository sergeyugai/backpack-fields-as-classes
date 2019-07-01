<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class TinymceField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#tinymce Documentation
 * 
* <a name="tinymce"></a>
* 
* Show a wysiwyg (TinyMCE) to the user.
* 
* ```php
 */
class TinymceField extends Field
{ 

    protected $result = ['type' => 'tinymce']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TinymceField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): TinymceField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TinymceField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}