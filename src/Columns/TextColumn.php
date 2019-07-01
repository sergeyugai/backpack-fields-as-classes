<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

/**
 * Class TextColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#text Documentation
 * 
* This example will show: 
* - "Draft" when the value stored in the db is 0;
* - "Published" when the value stored in the db is 1;  
* 
* <a name="row_number"></a>
* 
* 
* Show the row number (index). The number depends strictly on the result set (x records per page, pagination, search, filters, etc). It does not get any information from the database. It is not searchable. It is only useful to show the current row number.
* 
* ```
* $this->crud->addColumn([
*     'name' => 'row_number',
*     'type' => 'row_number',
*     'label' => '#',
*     'orderable' => false,
* ])->makeFirstColumn();
* ```
* 
* Notes:
* - you can have a different ```name```; just make sure your model doesn't have that attribute;
* - you can have a different label;
* - you can place the column as second / third / etc if you remove ```makeFirstColumn()```;
* - this column type allows the use of suffix/prefix just like the text column type;
* - if upon placement you notice it always shows ```false``` then please note there have been changes in the ```search()``` method - you need to add another parameter to your ```getEntriesAsJsonForDatatables()``` call;
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