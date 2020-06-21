<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class TextField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#text Documentation
 * 
* >It's highly recommended that you use [attribute casting](https://mattstauffer.co/blog/laravel-5.0-eloquent-attribute-casting) on your model when working with JSON stored in database columns, and cast your this attribute to either ```object``` or ```array```.
* 
* Input preview: 
* 
* ![CRUD Field - table](https://backpackforlaravel.com/uploads/docs-4-1/fields/table.png)
* 
* <hr>
* 
* <a name="text"></a>
* 
* The basic field type, all it needs is the two mandatory parameters: name and label.
* 
* ```php
 */
class TextField extends Field
{ 

    protected $type = 'text';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : TextField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): TextField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function prefix(string $value): TextField
    {
        $this->offsetSet('prefix', $value);
        return $this;
    }
    
    
    public function suffix(string $value): TextField
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
    public function default(string $value): TextField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function hint(string $value): TextField
    {
        $this->offsetSet('hint', $value);
        return $this;
    }
    
    
    public function attributes(array $value): TextField
    {
        $this->offsetSet('attributes', $value);
        return $this;
    }
    
    
    public function placeholder(string $value): TextField
    {
        $this->offsetSet('placeholder', $value);
        return $this;
    }
    
    
    public function class($value): TextField
    {
        $this->offsetSet('class', $value);
        return $this;
    }
    
    
    public function wrapper(array $value): TextField
    {
        $this->offsetSet('wrapper', $value);
        return $this;
    }
    
    
    public function readonly(string $value): TextField
    {
        $this->offsetSet('readonly', $value);
        return $this;
    }
    
    
}