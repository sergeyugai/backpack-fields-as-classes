<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class UploadMultipleField extends Field
{ 

    protected $result = ['type' => 'upload_multiple']; 

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