<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class UploadMultipleColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#upload_multiple Documentation
 * 
* <hr>
* 
* <a name="upload_multiple"></a>
* 
* 
* The ```table``` column will output a list of files and links, when used on an attribute that stores a JSON array of file paths. It is meant to be used inside the show functionality (not list, though it also works there), to preview files uploaded with the ```upload_multiple``` field type.
* 
* Its definition is very similar to the [upload_multiple *field type*](/docs/{{version}}/crud-fields#upload_multiple).
* 
* ```php
 */
class UploadMultipleColumn extends Column
{ 

    protected $result = ['type' => 'upload_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : UploadMultipleColumn
    {
        return new self($name, $label);
    }
    
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