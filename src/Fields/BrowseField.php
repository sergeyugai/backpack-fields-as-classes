<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class BrowseField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#browse Documentation
 * 
* > **Use attribute casting.** For information stored as JSON in the database, it's recommended that you use [attribute casting](https://mattstauffer.co/blog/laravel-5.0-eloquent-attribute-casting) to ```array``` or ```object```. That way, every time you get the info from the database you'd get it in a usable format.
* 
* Input preview: 
* 
* ![CRUD Field - address](https://backpackforlaravel.com/uploads/docs-3-5/fields/address_google.png)
* 
* <a name="browse"></a>
* 
* If you've chosen to use [elFinder](http://elfinder.org/) upon Backpack installation, this button allows the admin to open [elFinder](http://elfinder.org/) and select a file from there.
* 
* ```php
 */
class BrowseField extends Field
{ 

    protected $result = ['type' => 'browse']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : BrowseField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): BrowseField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): BrowseField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}