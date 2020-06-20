<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{AddressAlgoliaField};

/**
 * Class AddressAlgoliaFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class AddressAlgoliaFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : AddressAlgoliaFields
    {
        return new self($fields, AddressAlgoliaField::class);
    }
    
    public function label(string $value): AddressAlgoliaFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function store_as_json(bool $value = true): AddressAlgoliaFields
    {
        foreach ($this->result as $f) {
            $f->store_as_json($value);
        }
        return $this;
    }
    
    
}