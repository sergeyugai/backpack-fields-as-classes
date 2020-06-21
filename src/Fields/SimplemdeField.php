<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class SimplemdeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#simplemde Documentation
 * 
* 
* <hr>
* 
* <a name="simplemde"></a>
* 
* Show a [SimpleMDE markdown editor](https://simplemde.com/) to the user.
* 
* > **NOTE:** SimpleMDE works, but it has not received any updates in 4 years. We recommend you use EasyMDE instead, a fork of SimpleMDE that seems to be well looked after. Check out the [```easymde``` field type](#easymde) for Backpack - it works exactly the same as this one.
* 
* ```php
 */
class SimplemdeField extends Field
{ 

    protected $type = 'simplemde';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SimplemdeField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): SimplemdeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function simplemdeAttributes(array $value): SimplemdeField
    {
        $this->offsetSet('simplemdeAttributes', $value);
        return $this;
    }
    
    
    public function promptURLs(bool $value = true): SimplemdeField
    {
        $this->offsetSet('promptURLs', $value);
        return $this;
    }
    
    
    public function status(bool $value = true): SimplemdeField
    {
        $this->offsetSet('status', $value);
        return $this;
    }
    
    
    public function spellChecker(bool $value = true): SimplemdeField
    {
        $this->offsetSet('spellChecker', $value);
        return $this;
    }
    
    
    public function forceSync(bool $value = true): SimplemdeField
    {
        $this->offsetSet('forceSync', $value);
        return $this;
    }
    
    
    public function simplemdeAttributesRaw($value): SimplemdeField
    {
        $this->offsetSet('simplemdeAttributesRaw', $value);
        return $this;
    }
    
    
}