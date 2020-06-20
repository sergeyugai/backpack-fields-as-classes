<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class DateRangeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#date_range Documentation
 * 
* Please note it is recommended that you use [attribute casting](https://laravel.com/docs/5.3/eloquent-mutators#attribute-casting) on your model (cast to date).
* 
* 
* Input preview: 
* 
* ![CRUD Field - date_picker](https://backpackforlaravel.com/uploads/docs-4-1/fields/date_picker.png)
* 
* <hr>
* 
* <a name="date-range"></a>
* 
* Starting with Backpack\CRUD 3.1.59
* 
* Show a DateRangePicker and let the user choose a start date and end date.
* 
* ```php
 */
class DateRangeField extends Field
{ 

    protected $result = ['type' => 'date_range']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DateRangeField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): DateRangeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function default(array $value): DateRangeField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
    public function date_range_options(array $value): DateRangeField
    {
        $this->offsetSet('date_range_options', $value);
        return $this;
    }
    
    
    public function timePicker(bool $value = true): DateRangeField
    {
        $this->offsetSet('timePicker', $value);
        return $this;
    }
    
    
    public function locale(array $value): DateRangeField
    {
        $this->offsetSet('locale', $value);
        return $this;
    }
    
    
}