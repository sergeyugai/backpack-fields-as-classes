<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{CkeditorField};

/**
 * Class CkeditorFields 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections
 */
class CkeditorFields extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make($fields = null) : CkeditorFields
    {
        return new self($fields, CkeditorField::class);
    }
    
    public function label(string $value): CkeditorFields
    {
        foreach ($this->result as $f) {
            $f->label($value);
        }
        return $this;
    }
    
    
    public function extra_plugins(array $value): CkeditorFields
    {
        foreach ($this->result as $f) {
            $f->extra_plugins($value);
        }
        return $this;
    }
    
    
    public function options(array $value): CkeditorFields
    {
        foreach ($this->result as $f) {
            $f->options($value);
        }
        return $this;
    }
    
    
    public function autoGrow_minHeight($value): CkeditorFields
    {
        foreach ($this->result as $f) {
            $f->autoGrow_minHeight($value);
        }
        return $this;
    }
    
    
    public function autoGrow_bottomSpace($value): CkeditorFields
    {
        foreach ($this->result as $f) {
            $f->autoGrow_bottomSpace($value);
        }
        return $this;
    }
    
    
    public function removePlugins(string $value): CkeditorFields
    {
        foreach ($this->result as $f) {
            $f->removePlugins($value);
        }
        return $this;
    }
    
    
}