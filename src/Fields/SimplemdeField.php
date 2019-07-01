<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class SimplemdeField 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 * @link https://backpackforlaravel.com/docs/3.6/crud-fields#simplemde Documentation
 * 
* Input preview: 
* 
* ![CRUD Field - select2_from_array](https://backpackforlaravel.com/uploads/docs-3-5/fields/select2_from_array.png)
* 
* <a name="select2-from-ajax"></a>
* 
* Display a select2 that takes its values from an AJAX call.
* 
* ```
* [
*             // 1-n relationship
*             'label' => "End", // Table column heading
*             'type' => "select2_from_ajax",
*             'name' => 'category_id', // the column that contains the ID of that connected entity
*             'entity' => 'city', // the method that defines the relationship in your Model
*             'attribute' => "name", // foreign key attribute that is shown to user
*             'model' => "App\Models\Category", // foreign key model
*             'data_source' => url("api/category"), // url to controller search function (with /{id} should return model)
*             'placeholder' => "Select a category", // placeholder for the select
*             'minimum_input_length' => 2, // minimum characters to type before querying results
*             // 'dependencies'         => [‘category’], // when a dependency changes, this select2 is reset to null
*             // ‘method'                    => ‘GET’, // optional - HTTP method to use for the AJAX call (GET, POST)
* 	    // 'include_all_form_fields'  => false, // optional - only send the current field through AJAX (for a smaller payload if you're not using multiple chained select2s)
*  ]
* ```
* 
* Of course, you also need to create a controller and routes for the data_source above. Here's an example:
* 
* ```
* Route::get('/api/category', 'Api\CategoryController@index');
* Route::get('/api/category/{id}', 'Api\CategoryController@show');
* ```
* 
* ```
* <?php
* 
* namespace App\Http\Controllers\Api;
* 
* use Illuminate\Http\Request;
* use App\Http\Controllers\Controller;
* use Backpack\NewsCRUD\app\Models\Category;
* 
* class CategoryController extends Controller
* {
*     public function index(Request $request)
*     {
*         $search_term = $request->input('q');
*         $page = $request->input('page');
* 
*         if ($search_term)
*         {
*             $results = Category::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
*         }
*         else
*         {
*             $results = Category::paginate(10);
*         }
* 
*         return $results;
*     }
* 
*     public function show($id)
*     {
*         return Category::find($id);
*     }
* }
* ```
* 
* Input preview: 
* 
* ![CRUD Field - select2_from_array](https://backpackforlaravel.com/uploads/docs-3-5/fields/select2_from_array.png)
* 
* <a name="select2-from-ajax-multiple"></a>
* 
* Display a select2 that takes its values from an AJAX call. Same as [select2_from_ajax](#section-select2_from_ajax) above, but allows for multiple items to be selected. The only difference in the field definition is the "pivot" attribute.
* 
* ```
* [
*             // n-n relationship
*             'label' => "End", // Table column heading
*             'type' => "select2_from_ajax_multiple",
*             'name' => 'city_id', // the column that contains the ID of that connected entity
*             'entity' => 'city', // the method that defines the relationship in your Model
*             'attribute' => "name", // foreign key attribute that is shown to user
*             'model' => "App\Models\City", // foreign key model
*             'data_source' => url("api/cities"), // url to controller search function (with /{id} should return model)
*             'placeholder' => "Select a city", // placeholder for the select
*             'minimum_input_length' => 2, // minimum characters to type before querying results
*             'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
* 	    // 'include_all_form_fields'  => false, // optional - only send the current field through AJAX (for a smaller payload if you're not using multiple chained select2s)
*  ]
* ```
* 
* Of course, you also need to create a controller and routes for the data_source above. Here's an example:
* 
* ```
* Route::get('/api/category', 'Api\CategoryController@index');
* Route::get('/api/category/{id}', 'Api\CategoryController@show');
* ```
* 
* ```
* <?php
* 
* namespace App\Http\Controllers\Api;
* 
* use Illuminate\Http\Request;
* use App\Http\Controllers\Controller;
* use Backpack\NewsCRUD\app\Models\Category;
* 
* class CategoryController extends Controller
* {
*     public function index(Request $request)
*     {
*         $search_term = $request->input('q');
*         $page = $request->input('page');
* 
*         if ($search_term)
*         {
*             $results = Category::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
*         }
*         else
*         {
*             $results = Category::paginate(10);
*         }
* 
*         return $results;
*     }
* 
*     public function show($id)
*     {
*         return Category::find($id);
*     }
* }
* ```
* 
* Input preview: 
* 
* ![CRUD Field - select2_from_ajax_multiple](https://backpackforlaravel.com/uploads/docs-3-5/fields/select2_from_ajax_multiple.png)
* 
* <a name="simplemde"></a>
* 
* Show a [SimpleMDE markdown editor](https://simplemde.com/) to the user.
* 
* ```php
 */
class SimplemdeField extends Field
{ 

    protected $result = ['type' => 'simplemde']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string $name = null, string $label = null) : SimplemdeField
    {
        return new self($name, $label);
    }
    
    public function name(string $value): SimplemdeField
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): SimplemdeField
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function simplemdeAttributes(array $value): SimplemdeField
    {            
        // necessary conversion    
        $arrayable = new Arrayable();
        foreach ($value as $key => $val) {
            $arrayable[$key] = $val;
        }
        $value = $arrayable;
        $this->offsetSet('simplemdeAttributes', $value);
        return $this;
    }
    
    
    public function promptURLs(bool $value = true): SimplemdeField
    {
        $this->offsetSet('promptURLs', $value);
        return $this;
    }
    
    
    public function status(bool $value = true): SimplemdeField
    {
        $this->offsetSet('status', $value);
        return $this;
    }
    
    
    public function spellChecker(bool $value = true): SimplemdeField
    {
        $this->offsetSet('spellChecker', $value);
        return $this;
    }
    
    
    public function forceSync(bool $value = true): SimplemdeField
    {
        $this->offsetSet('forceSync', $value);
        return $this;
    }
    
    
    public function simplemdeAttributesRaw($value): SimplemdeField
    {
        $this->offsetSet('simplemdeAttributesRaw', $value);
        return $this;
    }
    
    
}