<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TinymceField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#tinymce Documentation
 * 
* <hr>
* 
* <a name="tinymce"></a>
* 
* Show a wysiwyg (TinyMCE) to the user.
* 
* ```php
 */
class TinymceField extends Field
{ 

    protected $type = 'tinymce';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TinymceField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): TinymceField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function options(array $value): TinymceField
    {
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
}