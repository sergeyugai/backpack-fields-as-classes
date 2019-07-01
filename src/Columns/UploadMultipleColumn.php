<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class UploadMultipleColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#upload_multiple Documentation
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