<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class BrowseMultipleField extends Field
{ 

    protected $result = ['type' => 'browse_multiple']; 

    public function name(string $value): BrowseMultipleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): BrowseMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function multiple(bool $value): BrowseMultipleField
    {
        $this->offsetSet('multiple', $value);
        return $this;
    }
    
    
    public function mime_types(array $value): BrowseMultipleField
    {
        $this->offsetSet('mime_types', $value);
        return $this;
    }
    
    }