<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RelationshipCountColumn 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 * @link https://backpackforlaravel.com/docs/4.1/crud-columns#relationship_count Documentation
 * 
* Backpack tries to guess which attribute to show for the related item. Something that the end-user will recognize as unique. If it's something common like "name" or "title" it will guess it. If not, you can manually specify the ```attribute``` inside the column definition, or you can add ```public $identifiableAttribute = 'column_name';``` to your model, and Backpack will use that column as the one the user finds identifiable. It will use it here, and it will use it everywhere you haven't explicitly asked for a different attribute.
* 
* <hr>
* 
* <a name="relationship_count"></a>
* 
* Shows the number of items that are related to the current entry, for a particular relationship.
* 
* ```php
 */
class RelationshipCountColumn extends Column
{ 

    protected $result = ['type' => 'relationship_count']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RelationshipCountColumn
    {
        return new self($name, $label);
    }
    
    public function label(string $value): RelationshipCountColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function suffix(string $value): RelationshipCountColumn
    {
        $this->offsetSet('suffix', $value);
        return $this;
    }
    
    
}