<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{UploadField};

/**
 * Class UploadFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class UploadFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : UploadFields
    {
        return new self($fields, UploadField::class);
    }
    
    public function name(string $value): UploadFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): UploadFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function upload(bool $value = true): UploadFields
    {
        foreach ($this->result as $f) {
            $f->upload($value);
        }
        return $this;
    }
    
    
    public function disk(string $value): UploadFields
    {
        foreach ($this->result as $f) {
            $f->disk($value);
        }
        return $this;
    }
    
    
    public function temporary(string $value): UploadFields
    {
        foreach ($this->result as $f) {
            $f->temporary($value);
        }
        return $this;
    }
    
    
}