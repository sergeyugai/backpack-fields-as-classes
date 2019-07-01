<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class ImageField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#image Documentation
 * 
* Your input will look like button, with a dropdown where the user can search or pick an icon:
* 
* Input preview: 
* 
* ![CRUD Field - icon_picker](https://backpackforlaravel.com/uploads/docs-3-5/fields/icon_picker.png)
* 
* <a name="image"></a>
* 
* Upload an image and store it on the disk. 
* 
* **Step 1.** Show the field. 
* ```php
* 
* **Step 2.** Set a mutator on your Model, so that the file can be stored. You can use this boilerplate code and modify it to match your use case:
* 
* ```php
* > **The uploaded images are not deleted for you.** If you delete an entry (using the CRUD or anywhere inside your app), the image file won't be deleted from the disk.
* > If you're NOT using soft deletes on that Model and want the image to be deleted at the same time the entry is, just specify that in your Model's ```deleting``` event:
* > ```php
 */
class ImageField extends Field
{ 

    protected $result = ['type' => 'image']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ImageField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): ImageField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function name(string $value): ImageField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function upload(bool $value = true): ImageField
    {
        $this->offsetSet('upload', $value);
        return $this;
    }
    
    
    public function crop(bool $value = true): ImageField
    {
        $this->offsetSet('crop', $value);
        return $this;
    }
    
    
    public function aspect_ratio($value): ImageField
    {
        $this->offsetSet('aspect_ratio', $value);
        return $this;
    }
    
    
    public function disk(string $value): ImageField
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    
    public function prefix(string $value): ImageField
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
}