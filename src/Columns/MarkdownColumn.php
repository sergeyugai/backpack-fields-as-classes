<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class MarkdownColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#markdown Documentation
 * 
* <hr>
* 
* <a name="markdown"></a>
* 
* 
* Convert a markdown string to HTML, using ```Illuminate\Mail\Markdown```. Since Markdown is usually used for long texts, this column is most helpful in the "Show" operation - not so much in the "ListEntries" operation, where only short snippets make sense.
* 
* ```php
 */
class MarkdownColumn extends Column
{ 

    protected $type = 'markdown';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : MarkdownColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): MarkdownColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}