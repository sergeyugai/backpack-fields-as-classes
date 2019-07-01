<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class ViewColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/3.6/crud-columns#view Documentation
 * 
* <a name="view"></a>
* 
* Display any custom column type you want. Usually used by Backpack package developers, to use views from within their packages, instead of having to publish the views. 
* 
* ```php
* 
* <a name="overwriting-default-column-types"></a>
* ## Overwriting Default Column Types
* 
* You can overwrite a column type by placing a file with the same name in your ```resources\views\vendor\backpack\crud\columns``` directory. When a file is there, Backpack will pick that one up, instead of the one in the package. You can do that from command line using ```php artisan backpack:crud:publish columns/column-file-name```
* - ```php artisan backpack:crud:publish columns/text``` will take the view from the package and copy it to the directory above, so you can edit it;
* 
* For example, you can create a ```markdown.blade.php```:
* ```php
 */
class ViewColumn extends Column
{ 

    protected $result = ['type' => 'view']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : ViewColumn
    {
        return new self($name, $label);
    }
    
    public function name(string $value): ViewColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): ViewColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function view(string $value): ViewColumn
    {
        $this->offsetSet('view', $value);
        return $this;
    }
    
    
}