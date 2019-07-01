<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{AddressGoogleField};

/**
 * Class AddressGoogleFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class AddressGoogleFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : AddressGoogleFields
    {
        return new self($fields, AddressGoogleField::class);
    }
    
    public function name(string $value): AddressGoogleFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): AddressGoogleFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function store_as_json(bool $value = true): AddressGoogleFields
    {
        foreach ($this->result as $f) {
            $f->store_as_json($value);
        }
        return $this;
    }
    
    
    public function key(string $value): AddressGoogleFields
    {
        foreach ($this->result as $f) {
            $f->key($value);
        }
        return $this;
    }
    
    
}