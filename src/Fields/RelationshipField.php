<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RelationshipField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#relationship Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - range](https://backpackforlaravel.com/uploads/docs-4-1/fields/range.png)
* 
* <hr>
* 
* <a name="relationship"></a>
* 
* Allows the user to choose one/more entries of an Eloquent Model that has a relationship with the current model, using a ```select2``` input. In order to work, this field needs the relationships to be properly defined on the Eloquent models (```hasOne```, ```hasMany```, ```belongsToOne```, ```belongsToMany``` etc).
* 
* Input preview (for both 1-n and n-n relationships): 
* 
* ![CRUD Field - range](https://backpackforlaravel.com/uploads/docs-4-1/fields/relationship.png)
* 
* 
* Take a look at the examples below to understand the correct syntax for your use case.
* 
* **Example 1. Few options (0-100). Entries are loaded onpage, using a simple Eloquent query. No AJAX.**
* ```php
* 
* **Example 2. Many options. Entries are loaded using AJAX.**
* 
* If your related entry can have hundreds, thousands or millions of entries, it's not practical to load the options using an Eloquent query onpage, because the Create/Update page would be very slow to load. In this case, you should instruct ```select2``` to fetch the entries using AJAX calls. To do that, in your ```relationship``` field definition you should add ```'ajax' => true```:
* 
* ```php
* 
* Then, you need to create the route and method that allows ```select2``` to search and fetch the results of that search. Fortunately, the ```FetchOperation``` allows you to easily do just that. Inside the CrudController where you've defined the ```relationship``` field, use the ```FetchOperation``` trait, and define a new method that will respond to AJAX queries:
* 
* ```php
* 
* This will set up a ```/fetch/category``` route, which points to ```fetchCategory()```, which returns the search results in a format ```select2``` likes. For more on how this operation works, and how you can customize it, check out the [FetchOperation docs](/docs/{{version}}/crud-operation-fetch).
* 
* **Additional operation. InlineCreate - lets the user create a related entry in a modal.**
* 
* Searching with AJAX provides a great UX. But what if the user doesn't find what they're looking for? In that case, it would be useful to add a related entry on-the-fly, without leaving the form. If you are using the Fetch operation to get the entries, you're already halfway there. In addition, you only need two additional steps:
* 
* ```php
* 
* Now, on the CrudController of that secondary entity the user will be able to create on-the-fly (ex: ```CategoryCrudController``` or ```TagCrudController```, you'll need to enable the InlineCreate operation:
* ```php
 */
class RelationshipField extends Field
{ 

    protected $type = 'relationship';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RelationshipField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): RelationshipField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function attribute(string $value): RelationshipField
    {
        $this->offsetSet('attribute', $value);
        return $this;
    }
    
    
    public function entity(string $value): RelationshipField
    {
        $this->offsetSet('entity', $value);
        return $this;
    }
    
    
    public function model(string $value): RelationshipField
    {
        $this->offsetSet('model', $value);
        return $this;
    }
    
    
    public function placeholder(string $value): RelationshipField
    {
        $this->offsetSet('placeholder', $value);
        return $this;
    }
    
    
    public function ajax($value): RelationshipField
    {
        $this->offsetSet('ajax', $value);
        return $this;
    }
    
    
    public function data_source($value): RelationshipField
    {
        $this->offsetSet('data_source', $value);
        return $this;
    }
    
    
    public function minimum_input_length($value): RelationshipField
    {
        $this->offsetSet('minimum_input_length', $value);
        return $this;
    }
    
    
    public function dependencies(array $value): RelationshipField
    {
        $this->offsetSet('dependencies', $value);
        return $this;
    }
    
    
    public function include_all_form_fields(bool $value = true): RelationshipField
    {
        $this->offsetSet('include_all_form_fields', $value);
        return $this;
    }
    
    
    public function inline_create($value): RelationshipField
    {
        $this->offsetSet('inline_create', $value);
        return $this;
    }
    
    
}