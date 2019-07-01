<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class TextColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#text Documentation
 */
class TextColumn extends Column
{ 

    protected $result = ['type' => 'text']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TextColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): TextColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): TextColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function prefix(string $value): TextColumn
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function suffix(string $value): TextColumn
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
    public function limit($value): TextColumn
    {
        $this->offsetSet('limit', $value);
        return $this;
    }
    
    
}