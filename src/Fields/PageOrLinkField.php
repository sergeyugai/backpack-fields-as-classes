<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class PageOrLinkField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#page_or_link Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - number](https://backpackforlaravel.com/uploads/docs-4-1/fields/number.png)
* 
* <hr>
* 
* <a name="page-or-link"></a>
* 
* Select an existing page from PageManager or an internal or external link. It's used in the MenuManager package, but can be used in any other model just as well. Its definition looks like this:
* ```php
 */
class PageOrLinkField extends Field
{ 

    protected $result = ['type' => 'page_or_link']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : PageOrLinkField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): PageOrLinkField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function page_model(string $value): PageOrLinkField
    {
        $this->offsetSet('page_model', $value);
        return $this;
    }
    
    
}