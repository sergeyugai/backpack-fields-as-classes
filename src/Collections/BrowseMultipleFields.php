<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{BrowseMultipleField};

/**
 * Class BrowseMultipleFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class BrowseMultipleFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : BrowseMultipleFields
    {
        return new self($fields, BrowseMultipleField::class);
    }
    
    public function label(string $value): BrowseMultipleFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function multiple(bool $value = true): BrowseMultipleFields
    {
        foreach ($this->result as $f) {
            $f->multiple($value);
        }
        return $this;
    }
    
    
    public function sortable(bool $value = true): BrowseMultipleFields
    {
        foreach ($this->result as $f) {
            $f->sortable($value);
        }
        return $this;
    }
    
    
    public function mime_types(array $value): BrowseMultipleFields
    {
        foreach ($this->result as $f) {
            $f->mime_types($value);
        }
        return $this;
    }
    
    
}