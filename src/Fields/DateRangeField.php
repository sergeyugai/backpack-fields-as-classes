<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class DateRangeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#date_range Documentation
 * 
* Please note it is recommended that you use [attribute casting](https://laravel.com/docs/5.3/eloquent-mutators#attribute-casting) on your model (cast to date).
* 
* 
* Input preview: 
* 
* ![CRUD Field - date_picker](https://backpackforlaravel.com/uploads/docs-3-5/fields/date_picker.png)
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
    
    public function name(string $value): DateRangeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function start_name(string $value): DateRangeField
    {
        $this->offsetSet('start_name', $value);
        return $this;
    }
    
    
    public function end_name(string $value): DateRangeField
    {
        $this->offsetSet('end_name', $value);
        return $this;
    }
    
    
    public function label(string $value): DateRangeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function start_default(string $value): DateRangeField
    {
        $this->offsetSet('start_default', $value);
        return $this;
    }
    
    
    public function end_default(string $value): DateRangeField
    {
        $this->offsetSet('end_default', $value);
        return $this;
    }
    
    
    public function date_range_options(array $value): DateRangeField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
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
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('locale', $value);
        return $this;
    }
    
    
}