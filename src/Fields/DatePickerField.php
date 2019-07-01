<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class DatePickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#date_picker Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - date](https://backpackforlaravel.com/uploads/docs-3-5/fields/date.png)
* 
* <a name="date-picker"></a>
* 
* Show a pretty [Bootstrap Datepicker](http://bootstrap-datepicker.readthedocs.io/en/latest/).
* 
* ```php
 */
class DatePickerField extends Field
{ 

    protected $result = ['type' => 'date_picker']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatePickerField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DatePickerField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatePickerField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function date_picker_options(array $value): DatePickerField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
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