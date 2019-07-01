<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class ViewField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#view Documentation
 * 
* An entry stored in the database will look like this:
* ```
* $video = {
*     id: 234324,
*     title: ‘my video title’,
*     image: ‘https://provider.com/image.jpg',
*     url: ‘http://provider.com/video',
*     provider: ‘youtube’
* }
* ```
* 
* So you should use [attribute casting](https://mattstauffer.co/blog/laravel-5.0-eloquent-attribute-casting) in your model, to cast the video as ```array``` or ```object```.
* 
* 
* <a name="view"></a>
* 
* Load a custom view in the form.
* 
* ```php
 */
class ViewField extends Field
{ 

    protected $result = ['type' => 'view']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ViewField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ViewField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function view(string $value): ViewField
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    
}