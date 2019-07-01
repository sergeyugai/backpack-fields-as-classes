<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{SimplemdeField};

/**
 * Class SimplemdeFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class SimplemdeFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields) : SimplemdeFields
    {
        return new self($fields, SimplemdeField::class);
    }
    
    public function name(string $value): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->name($value);
        }
        return $this;
    }
    
    
    public function label(string $value): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function simplemdeAttributes(array $value): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->simplemdeAttributes($value);
        }
        return $this;
    }
    
    
    public function promptURLs(bool $value = true): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->promptURLs($value);
        }
        return $this;
    }
    
    
    public function status(bool $value = true): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->status($value);
        }
        return $this;
    }
    
    
    public function spellChecker(bool $value = true): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->spellChecker($value);
        }
        return $this;
    }
    
    
    public function forceSync(bool $value = true): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->forceSync($value);
        }
        return $this;
    }
    
    
    public function simplemdeAttributesRaw($value): SimplemdeFields
    {
        foreach ($this->result as $f) {
            $f->simplemdeAttributesRaw($value);
        }
        return $this;
    }
    
    
}