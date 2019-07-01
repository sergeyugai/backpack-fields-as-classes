<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class UploadField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#upload Documentation
 */
class UploadField extends Field
{ 

    protected $result = ['type' => 'upload']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : UploadField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): UploadField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UploadField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function upload(bool $value = true): UploadField
    {
        $this->offsetSet('upload', $value);
        return $this;
    }
    
    
    public function disk(string $value): UploadField
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    
}