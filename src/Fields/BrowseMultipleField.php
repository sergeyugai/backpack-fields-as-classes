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
    
    
    public function multiple(bool $value = true): BrowseMultipleField
    {
        $this->offsetSet('multiple', $value);
        return $this;
    }
    
    
    public function mime_types(array $value): BrowseMultipleField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('mime_types', $value);
        return $this;
    }
    
    
}