<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{ViewField};

/**
 * Class ViewFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class ViewFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : ViewFields
    {
        return new self($fields, ViewField::class);
    }
    
    public function view(string $value): ViewFields
    {
        foreach ($this->result as $f) {
            $f->view($value);
        }
        return $this;
    }
    
    
}