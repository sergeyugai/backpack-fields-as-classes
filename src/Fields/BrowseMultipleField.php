<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class BrowseMultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#browse_multiple Documentation
 * 
* 
* Input preview: 
* 
* ![CRUD Field - browse](https://backpackforlaravel.com/uploads/docs-4-1/fields/browse.png)
* 
* Onclick preview:
* 
* ![CRUD Field - browse popup](https://backpackforlaravel.com/uploads/docs-4-1/fields/browse_popup.png)
* 
* <hr>
* 
* <a name="browse-multiple"></a>
* 
* Open elFinder and select multiple file from there. Run ```composer require backpack/filemanager``` to install elFinder, then you can use the field:
* 
* ```php
 */
class BrowseMultipleField extends Field
{ 

    protected $result = ['type' => 'browse_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : BrowseMultipleField
    {
        return new self($name, $label);
    }
    
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
    
    
    public function sortable(bool $value = true): BrowseMultipleField
    {
        $this->offsetSet('sortable', $value);
        return $this;
    }
    
    
    public function mime_types(array $value): BrowseMultipleField
    {
        $this->offsetSet('mime_types', $value);
        return $this;
    }
    
    
}