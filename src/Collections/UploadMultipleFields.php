<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{UploadMultipleField};

/**
 * Class UploadMultipleFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class UploadMultipleFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : UploadMultipleFields
    {
        return new self($fields, UploadMultipleField::class);
    }
    
    public function label(string $value): UploadMultipleFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function upload(bool $value = true): UploadMultipleFields
    {
        foreach ($this->result as $f) {
            $f->upload($value);
        }
        return $this;
    }
    
    
    public function disk(string $value): UploadMultipleFields
    {
        foreach ($this->result as $f) {
            $f->disk($value);
        }
        return $this;
    }
    
    
    public function temporary(string $value): UploadMultipleFields
    {
        foreach ($this->result as $f) {
            $f->temporary($value);
        }
        return $this;
    }
    
    
    public function photos(string $value): UploadMultipleFields
    {
        foreach ($this->result as $f) {
            $f->photos($value);
        }
        return $this;
    }
    
    
}