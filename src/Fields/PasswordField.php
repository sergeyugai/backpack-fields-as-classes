<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class PasswordField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/4.1/crud-fields#password Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - page_or_link](https://backpackforlaravel.com/uploads/docs-4-1/fields/page_or_link.png)
* 
* <hr>
* 
* <a name="password"></a>
* 
* ```php
* 
* Input preview: 
* 
* ![CRUD Field - password](https://backpackforlaravel.com/uploads/docs-4-1/fields/password.png)
* 
* 
* Please note that this will NOT hash/encrypt the string before it stores it to the database. You need to hash the password manually. The most popular way to do that are:
* 
* 1. Using [a mutator on your Model](https://laravel.com/docs/7.x/eloquent-mutators#defining-a-mutator). For example:
* 
* ```php
* 
* 2. By overwriting the Create/Update operation methods, inside the Controller. There's a working example [in our PermissionManager package](https://github.com/Laravel-Backpack/PermissionManager/blob/master/src/app/Http/Controllers/UserCrudController.php#L103-L124) but the gist of it is this:
* 
* ```php
 */
class PasswordField extends Field
{ 

    protected $type = 'password';

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : PasswordField
    {
        return new self($name, $label);
    }
    
    public function label(string $value): PasswordField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
}