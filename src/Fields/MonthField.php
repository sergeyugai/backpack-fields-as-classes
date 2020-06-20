<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class MonthField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#month Documentation
 * 
* **A note about aspect_ratio**
* The value for aspect ratio is a float that represents the ratio of the cropping rectangle height and width. By way of example,
* 
* - Square = 1
* - Landscape = 2
* - Portrait = 0.5
* 
* And you can, of course, use any value for more extreme rectangles.
* 
* Input preview: 
* 
* ![CRUD Field - image](https://backpackforlaravel.com/uploads/docs-4-1/fields/image.png)
* 
* <hr>
* 
* <a name="month"></a>
* 
* ```php
 */
class MonthField extends Field
{ 

    protected $result = ['type' => 'month']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : MonthField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): MonthField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}