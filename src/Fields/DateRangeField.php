<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

class DateRangeField extends Field
{ 

    protected $result = ['type' => 'date_range']; 

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