<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class DatetimeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#datetime Documentation
 * 
* Please note it is recommended that you use [attribute casting](https://laravel.com/docs/5.3/eloquent-mutators#attribute-casting) on your model (cast to date).
* 
* Your end result will look like this:
* 
* Input preview: 
* 
* ![CRUD Field - date_range](https://backpackforlaravel.com/uploads/docs-3-5/fields/date_range.png)
* 
* <a name="datetime"></a>
* 
* ```php
* 
* **Please note:** if you're using datetime [attribute casting](https://laravel.com/docs/5.3/eloquent-mutators#attribute-casting) on your model, you also need to place this mutator inside your model:
* ```php
 */
class DatetimeField extends Field
{ 

    protected $result = ['type' => 'datetime']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatetimeField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DatetimeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatetimeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}