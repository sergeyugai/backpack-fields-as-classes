<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class UploadMultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#upload_multiple Documentation
 */
class UploadMultipleField extends Field
{ 

    protected $result = ['type' => 'upload_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : UploadMultipleField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): UploadMultipleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UploadMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function upload(bool $value = true): UploadMultipleField
    {
        $this->offsetSet('upload', $value);
        return $this;
    }
    
    
    public function disk(string $value): UploadMultipleField
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    
    public function photos(string $value): UploadMultipleField
    {
        $this->offsetSet('photos', $value);
        return $this;
    }
    
    
}