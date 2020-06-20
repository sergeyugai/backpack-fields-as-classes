<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RowNumberColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#row_number Documentation
 * 
* <hr>
* 
* <a name="row_number"></a>
* 
* 
* Show the row number (index). The number depends strictly on the result set (x records per page, pagination, search, filters, etc). It does not get any information from the database. It is not searchable. It is only useful to show the current row number.
* 
* ```php
 */
class RowNumberColumn extends Column
{ 

    protected $result = ['type' => 'row_number']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RowNumberColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): RowNumberColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): RowNumberColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function orderable(bool $value = true): RowNumberColumn
    {
        $this->offsetSet('orderable', $value);
        return $this;
    }
    
    
}