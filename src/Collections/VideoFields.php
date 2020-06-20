<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{VideoField};

/**
 * Class VideoFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class VideoFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : VideoFields
    {
        return new self($fields, VideoField::class);
    }
    
    public function label(string $value): VideoFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function youtube_api_key(string $value): VideoFields
    {
        foreach ($this->result as $f) {
            $f->youtube_api_key($value);
        }
        return $this;
    }
    
    
}