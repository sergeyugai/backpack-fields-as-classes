<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class CkeditorField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#ckeditor Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - checklist_dependency](https://backpackforlaravel.com/uploads/docs-3-5/fields/checklist_dependency.png)
* 
* <a name="ckeditor"></a>
* 
* Show a wysiwyg CKEditor to the user.
* 
* ```php
 */
class CkeditorField extends Field
{ 

    protected $result = ['type' => 'ckeditor']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : CkeditorField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): CkeditorField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CkeditorField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function extra_plugins(array $value): CkeditorField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('extra_plugins', $value);
        return $this;
    }
    
    
    public function options(array $value): CkeditorField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('options', $value);
        return $this;
    }
    
    
    public function autoGrow_minHeight($value): CkeditorField
    {
        $this->offsetSet('autoGrow_minHeight', $value);
        return $this;
    }
    
    
    public function autoGrow_bottomSpace($value): CkeditorField
    {
        $this->offsetSet('autoGrow_bottomSpace', $value);
        return $this;
    }
    
    
    public function removePlugins(string $value): CkeditorField
    {
        $this->offsetSet('removePlugins', $value);
        return $this;
    }
    
    
}