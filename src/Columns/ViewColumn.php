<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class ViewColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#view Documentation
 */
class ViewColumn extends Column
{ 

    protected $result = ['type' => 'view']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ViewColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ViewColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ViewColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function view(string $value): ViewColumn
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    
}