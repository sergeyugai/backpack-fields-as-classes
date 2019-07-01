<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class DatetimePickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#datetime_picker Documentation
 * Otherwise the input's datetime-local formal will cause some errors.
* 
* Input preview: 
* 
* ![CRUD Field - datetime](https://backpackforlaravel.com/uploads/docs-3-5/fields/datetime.png)
* 
* <a name="datetime-picker"></a>
* 
* Show a [Bootstrap Datetime Picker](https://eonasdan.github.io/bootstrap-datetimepicker/).
* 
* ```php
* 
* **Please note:** if you're using date [attribute casting](https://laravel.com/docs/5.3/eloquent-mutators#attribute-casting) on your model, you may also need to place this mutator inside your model:
* ```php
 */
class DatetimePickerField extends Field
{ 

    protected $result = ['type' => 'datetime_picker']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DatetimePickerField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): DatetimePickerField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): DatetimePickerField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function datetime_picker_options(array $value): DatetimePickerField
    {
        $this->offsetSet('datetime_picker_options', $value);
        return $this;
    }
    
    
    public function format(string $value): DatetimePickerField
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    
    public function language(string $value): DatetimePickerField
    {
        $this->offsetSet('language', $value);
        return $this;
    }
    
    
    public function allows_null(bool $value = true): DatetimePickerField
    {
        $this->offsetSet('allows_null', $value);
        return $this;
    }
    
    
    public function default(string $value): DatetimePickerField
    {
        $this->offsetSet('default', $value);
        return $this;
    }
    
    
}