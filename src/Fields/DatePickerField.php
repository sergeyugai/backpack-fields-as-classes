<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class DatePickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#date_picker Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - date](https://backpackforlaravel.com/uploads/docs-4-1/fields/date.png)
* 
* <hr>
* 
* <a name="date-picker"></a>
* 
* Show a pretty [Bootstrap Datepicker](http://bootstrap-datepicker.readthedocs.io/en/latest/).
* 
* ```php
 */
class DatePickerField extends Field
{ 

    protected $type = 'date_picker';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatePickerField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): DatePickerField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function date_picker_options(array $value): DatePickerField
    {
        $this->offsetSet('date_picker_options', $value);
        return $this;
    }
    
    
    public function todayBtn(string $value): DatePickerField
    {
        $this->offsetSet('todayBtn', $value);
        return $this;
    }
    
    
    public function format(string $value): DatePickerField
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    
    public function language(string $value): DatePickerField
    {
        $this->offsetSet('language', $value);
        return $this;
    }
    
    
}