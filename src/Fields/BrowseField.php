<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class BrowseField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#browse Documentation
 * 
* > **Use attribute casting.** For information stored as JSON in the database, it's recommended that you use [attribute casting](https://mattstauffer.co/blog/laravel-5.0-eloquent-attribute-casting) to ```array``` or ```object```. That way, every time you get the info from the database you'd get it in a usable format. Also, it is heavily recommended that your database column can hold a large JSON - so use `text` rather than `string` in your migration (in MySQL this translates to `text` instead of `varchar`).
* 
* Input preview: 
* 
* ![CRUD Field - address](https://backpackforlaravel.com/uploads/docs-4-1/fields/address_google.png)
* 
* <hr>
* 
* <a name="browse"></a>
* 
* This button allows the admin to open [elFinder](http://elfinder.org/) and select a file from there. Run ```composer require backpack/filemanager``` to install elFinder, then you can use the field:
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
    
    public function label(string $value): BrowseField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}