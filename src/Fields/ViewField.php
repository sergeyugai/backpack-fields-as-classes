<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ViewField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#view Documentation
 * 
* An entry stored in the database will look like this:
* ```
* $video = {
*     id: 234324,
*     title: 'my video title',
*     image: 'https://provider.com/image.jpg',
*     url: 'http://provider.com/video',
*     provider: 'youtube'
* }
* ```
* 
* So you should use [attribute casting](https://mattstauffer.co/blog/laravel-5.0-eloquent-attribute-casting) in your model, to cast the video as ```array``` or ```object```.
* 
* Vimeo does not require an API key in order to query their DB, but YouTube does, even though their free quota is generous. You can get a free YouTube API Key inside [Google Developers Console](https://console.developers.google.com/) ([video tutorial here](https://www.youtube.com/watch?v=pP4zvduVAqo)). 
* 
* 
* <hr>
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
    
    public function view(string $value): ViewField
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    
}