<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class UploadMultipleColumn extends Column
{ 

    protected $result = ['type' => 'upload_multiple']; 

    public function name(string $value): UploadMultipleColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UploadMultipleColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function disk(string $value): UploadMultipleColumn
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    }