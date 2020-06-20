<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class VideoField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#video Documentation
 * 
* <hr>
* 
* <a name="video"></a>
* 
* Allow the user to paste a YouTube/Vimeo link. That will get the video information with JavaScript and store it as a JSON in the database.
* 
* Field definition:
* ```php
 */
class VideoField extends Field
{ 

    protected $result = ['type' => 'video']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : VideoField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): VideoField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function youtube_api_key(string $value): VideoField
    {
        $this->offsetSet('youtube_api_key', $value);
        return $this;
    }
    
    
}