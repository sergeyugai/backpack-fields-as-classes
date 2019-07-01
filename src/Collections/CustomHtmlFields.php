<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{CustomHtmlField};

/**
 * Class CustomHtmlFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class CustomHtmlFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : CustomHtmlFields
    {
        return new self($fields, CustomHtmlField::class);
    }
    
    public function name(string $value): CustomHtmlFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function value(string $value): CustomHtmlFields
    {
        foreach ($this->result as $f) {
            $f->value($value);
        }
        return $this;
    }
    
    
}