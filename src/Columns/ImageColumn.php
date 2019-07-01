<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class ImageColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#image Documentation
 */
class ImageColumn extends Column
{ 

    protected $result = ['type' => 'image']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ImageColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ImageColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ImageColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function prefix(string $value): ImageColumn
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function height(string $value): ImageColumn
    {
        $this->offsetSet('height', $value);
        return $this;
    }
    
    
    public function width(string $value): ImageColumn
    {
        $this->offsetSet('width', $value);
        return $this;
    }
    
    
}