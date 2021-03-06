<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class DateColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#date Documentation
 * 
* <hr>
* 
* <a name="date"></a>
* 
* 
* The date column will show a localized date in the default date format (as specified in the ```config/backpack/base.php``` file), whether the attribute is casted as date in the model or not.
* 
* Note that the ```format``` attribute uses ISO date formatting parameters and not PHP ```date()``` formatters.  See <https://carbon.nesbot.com/docs/#iso-format-available-replacements> for more information.
* 
* ```php
 */
class DateColumn extends Column
{ 

    protected $type = 'date';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : DateColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): DateColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function format(string $value): DateColumn
    {
        $this->offsetSet('format', $value);
        return $this;
    }
    
    
}