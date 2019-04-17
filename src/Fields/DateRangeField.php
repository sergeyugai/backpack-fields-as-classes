<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class DateRangeField extends Field
{ 

    protected $result = ['type' => 'date_range']; 

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
        $this->offsetSet('date_range_options', $value);
        return $this;
    }
    
    
    public function timePicker(bool $value): DateRangeField
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