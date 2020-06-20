<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{EasymdeField};

/**
 * Class EasymdeFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class EasymdeFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : EasymdeFields
    {
        return new self($fields, EasymdeField::class);
    }
    
    public function label(string $value): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function easymdeAttributes(array $value): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->easymdeAttributes($value);
        }
        return $this;
    }
    
    
    public function promptURLs(bool $value = true): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->promptURLs($value);
        }
        return $this;
    }
    
    
    public function status(bool $value = true): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->status($value);
        }
        return $this;
    }
    
    
    public function spellChecker(bool $value = true): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->spellChecker($value);
        }
        return $this;
    }
    
    
    public function forceSync(bool $value = true): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->forceSync($value);
        }
        return $this;
    }
    
    
    public function easymdeAttributesRaw($value): EasymdeFields
    {
        foreach ($this->result as $f) {
            $f->easymdeAttributesRaw($value);
        }
        return $this;
    }
    
    
}