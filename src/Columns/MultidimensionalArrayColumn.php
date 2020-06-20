<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class MultidimensionalArrayColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#multidimensional_array Documentation
 * 
* **Note:** When displaying this column's value, the text is not escaped. That is intentional. This way, you can use it to show labels, color text, italic, bold, links, etc. If you might have malicious JS or CSS in your values, you can create a new escaped field yourself. But it's probably better to treat the problem at the source, and prevent that JS and CSS from reaching your DB in the first place.
* 
* <hr>
* 
* <a name="multidimensional_array"></a>
* 
* 
* Enumerate the values in a multidimensional array, stored in the db as JSON.
* 
* ```php
 */
class MultidimensionalArrayColumn extends Column
{ 

    protected $result = ['type' => 'multidimensional_array']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : MultidimensionalArrayColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): MultidimensionalArrayColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function visible_key(string $value): MultidimensionalArrayColumn
    {
        $this->offsetSet('visible_key', $value);
        return $this;
    }
    
    
}