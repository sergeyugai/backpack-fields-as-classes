<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ImageField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#image Documentation
 * 
* Your input will look like button, with a dropdown where the user can search or pick an icon:
* 
* Input preview: 
* 
* ![CRUD Field - icon_picker](https://backpackforlaravel.com/uploads/docs-4-1/fields/icon_picker.png)
* 
* <hr>
* 
* <a name="image"></a>
* 
* Upload an image and store it on the disk. 
* 
* **Step 1.** Show the field. 
* ```php
* 
* **Step 2.** Add a [mutator](https://laravel.com/docs/7.x/eloquent-mutators#defining-a-mutator) to your Model, where you pick up the uploaded file and store it wherever you want. You can use this boilerplate code and modify it to match your use case. The code below requires that you have ```intervention/image``` installed. If you don't, please do ```composer require intervention/image``` first.
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