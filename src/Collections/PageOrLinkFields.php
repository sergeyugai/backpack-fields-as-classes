<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{PageOrLinkField};

/**
 * Class PageOrLinkFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class PageOrLinkFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : PageOrLinkFields
    {
        return new self($fields, PageOrLinkField::class);
    }
    
    public function name(string $value): PageOrLinkFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): PageOrLinkFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function page_model(string $value): PageOrLinkFields
    {
        foreach ($this->result as $f) {
            $f->page_model($value);
        }
        return $this;
    }
    
    
}