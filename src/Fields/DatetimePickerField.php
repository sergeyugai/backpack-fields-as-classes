<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class DatetimePickerField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#datetime_picker Documentation
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
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
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