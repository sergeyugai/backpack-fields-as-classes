<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class RepeatableField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#repeatable Documentation
 * 
* This ```InlineCreateOperation``` will allow us to show _the same fields that are inside the Create operation_, inside a new operation _InlineCreate_, that is available in a modal. For more information, check out the [InlineCreate Operation docs](/docs/{{version}}/crud-operation-inline-create).
* 
* Remember, ```FetchOperation``` is still needed on the main crud (ex: ```ArticleCrudController```) so that the entries are fetched by ```select2``` using AJAX.
* 
* <hr>
* 
* <a name="repeatable"></a>
* 
* Shows a group of inputs to the user, and allows the user to add ore remove groups of that kind:
* 
* ![CRUD Field - repeatable](https://backpackforlaravel.com/uploads/docs-4-1/fields/repeatable.png)
* 
* Clicking on the "New Item" button will add another group with the same fields (in the example, another Testimonial). The end result is a JSON with the values for those fields, nicely grouped. 
* 
* You can use most field types inside the field groups, add as many fields you need, and change their width using ```wrapper``` like you would do outside the repeatable field. But please note that:
* - **all fields defined inside a field group need to have their definition valid and complete**; you can't use shorthands, you shouldn't assume fields will guess attributes for you;
* - some field types do not make sense to be included inside a field group (for example, relationship fields might not make sense; they will work if the relationship is defined on the main model, but upon save the selected entries will NOT be saved as usual, they will be saved as JSON; you can intercept the saving if you want and do whatever you want); 
* - a few fields _make sense_, but _cannot_ work inside a repeatable group (ex: upload, upload_multiple); [see the notes inside the PR](https://github.com/Laravel-Backpack/CRUD/pull/2266#issuecomment-559436214) for more details, and a complete list of the fields; the few fields that do not work inside repeatable have sensible alternatives;
* 
* 
* ```php
 */
class RepeatableField extends Field
{ 

    protected $result = ['type' => 'repeatable']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : RepeatableField
    {
        return new self($name, $label);
    }
    
    public function label($value): RepeatableField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function fields(array $value): RepeatableField
    {
        $this->offsetSet('fields', $value);
        return $this;
    }
    
    
    public function wrapper($value): RepeatableField
    {
        $this->offsetSet('wrapper', $value);
        return $this;
    }
    
    
}