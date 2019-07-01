<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class UploadMultipleField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#upload_multiple Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - upload](https://backpackforlaravel.com/uploads/docs-3-5/fields/upload.png)
* 
* <a name="upload-multiple"></a>
* 
* Shows a multiple file input to the user and stores the values as a JSON array in the database.
* 
* **Step 1.** Show a multiple file input to the user:
* ```php
* 
* **Step 2.** In order to save/update/delete the files from disk&db, we need to create [a mutator](https://laravel.com/docs/5.3/eloquent-mutators#defining-a-mutator) on your model:
* ```php
* 
* **Step 3.** Since the filenames are stored in the database as a JSON array, we're going to use [attribute casting](https://laravel.com/docs/5.3/eloquent-mutators#attribute-casting) on your model, so every time we get the filenames array from the database it's converted from a JSON array to a PHP array:
* ```php
* 
* **How it works:**
* 
* The field sends the files, through a Request, to the Controller. The Controller then tries to create/update the Model. That's when the mutator on your model will run. That also means we can do any [file validation](https://laravel.com/docs/5.3/validation#rule-file) (```file```, ```image```, ```mimetypes```, ```mimes```) in the Request, before the files are stored on the disk.
* 
* [The ```uploadMultipleFilesToDisk()``` method](https://github.com/Laravel-Backpack/CRUD/blob/master/src/CrudTrait.php#L154-L189) will take care of everything for most use cases:
* 
* ```
* /**
*      * Handle multiple file upload and DB storage:
*      * - if files are sent
*      *     - stores the files at the destination path
*      *     - generates random names
*      *     - stores the full path in the DB, as JSON array;
*      * - if a hidden input is sent to clear one or more files
*      *     - deletes the file
*      *     - removes that file from the DB.
*      * /
* public function uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path) {}
* ```
* 
* If you wish to have a different functionality, you can delete the method call from your mutator and do your own thing.
* 
* >**The uploaded files are not deleted for you.** When you delete an entry (wether through CRUD or the application), the uploaded files will not be deleted.
* 
* If you're NOT using soft deletes on that Model and want the files to be deleted at the same time the entry is, just specify that in your Model's ```deleting``` event:
* ```php
 */
class UploadMultipleField extends Field
{ 

    protected $result = ['type' => 'upload_multiple']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : UploadMultipleField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): UploadMultipleField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): UploadMultipleField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function upload(bool $value = true): UploadMultipleField
    {
        $this->offsetSet('upload', $value);
        return $this;
    }
    
    
    public function disk(string $value): UploadMultipleField
    {
        $this->offsetSet('disk', $value);
        return $this;
    }
    
    
    public function photos(string $value): UploadMultipleField
    {
        $this->offsetSet('photos', $value);
        return $this;
    }
    
    
}