<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class UploadField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#upload Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - tinymce](https://backpackforlaravel.com/uploads/docs-3-5/fields/tinymce.png)
* 
* <a name="upload"></a>
* 
* **Step 1.** Show a file input to the user:
* ```php
* 
* **Step 2.** In order to save/update/delete the file from disk&db, we need to create [a mutator](https://laravel.com/docs/5.3/eloquent-mutators#defining-a-mutator) on your model:
* ```php
* 
* **How it works:**
* 
* The field sends the file, through a Request, to the Controller. The Controller then tries to create/update the Model. That's when the mutator on your model will run. That also means we can do any [file validation](https://laravel.com/docs/5.3/validation#rule-file) (```file```, ```image```, ```mimetypes```, ```mimes```) in the Request, before the file is stored on the disk.
* 
* [The ```uploadFileToDisk()``` method](https://github.com/Laravel-Backpack/CRUD/blob/master/src/CrudTrait.php#L108-L129) will take care of everything for most use cases:
* 
* ```php
* 
* If you wish to have a different functionality, you can delete the method call from your mutator and do your own thing.
* 
* >**The uploaded files are not deleted for you.** When you delete an entry (wether through CRUD or the application), the uploaded files will not be deleted.
* 
* If you're NOT using soft deletes on that Model and want the file to be deleted at the same time the entry is, just specify that in your Model's ```deleting``` event:
* ```php
 */
class UploadField extends Field
{ 

    protected $result = ['type' => 'upload']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : UploadField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): UploadField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UploadField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function upload(bool $value = true): UploadField
    {
        $this->offsetSet('upload', $value);
        return $this;
    }
    
    
    public function disk(string $value): UploadField
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    
}