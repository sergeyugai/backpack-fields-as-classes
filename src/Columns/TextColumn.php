<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TextColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#text Documentation
 * 
* Notes:
* - you can have a different ```name```; just make sure your model doesn't have that attribute;
* - you can have a different label;
* - you can place the column as second / third / etc if you remove ```makeFirstColumn()```;
* - this column type allows the use of suffix/prefix just like the text column type;
* - if upon placement you notice it always shows ```false``` then please note there have been changes in the ```search()``` method - you need to add another parameter to your ```getEntriesAsJsonForDatatables()``` call;
* 
* <hr>
* 
* <a name="text"></a>
* 
* The text column will just output the text value of a db column (or model attribute). Its definition is:
* ```php
* 
* **Advanced use case:** The ```text``` column type can also show the attribute of a 1-1 relationship. If you have a relationship (like ```parent()```) set up in your Model, you can use relationship and attibute in the ```name```, using dot notation:
* ```php
 */
class TextColumn extends Column
{ 

    protected $result = ['type' => 'text']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TextColumn
    {
        return new self($name, $label);
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