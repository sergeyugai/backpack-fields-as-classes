<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class EasymdeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#easymde Documentation
 * Otherwise the input's datetime-local format will cause some errors. Remember to change "datetime" with the name of your attribute (column name).
* 
* Input preview: 
* 
* ![CRUD Field - datetime_picker](https://backpackforlaravel.com/uploads/docs-4-1/fields/datetime_picker.png)
* 
* <hr>
* 
* <a name="easymde"></a>
* 
* Show an [EasyMDE markdown editor](https://easymde.com/) to the user. EasyMDE is a well-maintained fork of SimpleMDE.
* 
* ```php
 */
class EasymdeField extends Field
{ 

    protected $result = ['type' => 'easymde']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : EasymdeField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): EasymdeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function easymdeAttributes(array $value): EasymdeField
    {
        $this->offsetSet('easymdeAttributes', $value);
        return $this;
    }
    
    
    public function promptURLs(bool $value = true): EasymdeField
    {
        $this->offsetSet('promptURLs', $value);
        return $this;
    }
    
    
    public function status(bool $value = true): EasymdeField
    {
        $this->offsetSet('status', $value);
        return $this;
    }
    
    
    public function spellChecker(bool $value = true): EasymdeField
    {
        $this->offsetSet('spellChecker', $value);
        return $this;
    }
    
    
    public function forceSync(bool $value = true): EasymdeField
    {
        $this->offsetSet('forceSync', $value);
        return $this;
    }
    
    
    public function easymdeAttributesRaw($value): EasymdeField
    {
        $this->offsetSet('easymdeAttributesRaw', $value);
        return $this;
    }
    
    
}