<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class UploadField extends Field
{ 

    protected $result = ['type' => 'upload']; 

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
    
    
    public function upload(bool $value): UploadField
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