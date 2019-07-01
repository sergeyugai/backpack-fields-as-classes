<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class WysiwygField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#wysiwyg Documentation
 */
class WysiwygField extends Field
{ 

    protected $result = ['type' => 'wysiwyg']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : WysiwygField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): WysiwygField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): WysiwygField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function / view_namespace(string $value): WysiwygField
    {
        $this->offsetSet('/ view_namespace', $value);
        return $this;
    }
    
    
}