<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class VideoColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#video Documentation
 * 
* <hr>
* 
* <a name="video"></a>
* 
* 
* Display a small screenshot for a Youtube or Vimeo video, stored in the database as JSON using the "video" field type.
* 
* ```php
 */
class VideoColumn extends Column
{ 

    protected $result = ['type' => 'video']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : VideoColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): VideoColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): VideoColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}