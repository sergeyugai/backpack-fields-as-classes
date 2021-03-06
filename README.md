# Better field/column syntax declaration for Laravel Backpack 

This is a **drop-in** solution for [Laravel backpack](https://backpackforlaravel.com) to replace column/fields
declarations-via-array with object-oriented approach. Allows your IDE to help you write that stuff.

**This version is compatible with Backpack 4.1 and above**; for older Backpack versions, use 0.3.* versions of this package.

TLDR: With this package, you can write Backpack code like this:
```php
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;

public function setupOperation() 
{
    // option 1 (via CrudPanel)
    CrudPanel::textField('user')->suffix('...etc');

    // option 2 (via builder method)
    TextField::name('user')->prefix('1.'); 
    TextField::make('field_name', 'optional_label')

    // option 3 (via constructor)
    (new TextField('user', 'some label'))->chained_methods...

    // option 4 (older ways):
    $this->crud->addFields([
        TextField::make('field_name', 'optional_label')->other_chained_methods...,
        (new TextField('title'))->prefix('1.')
    ]); 
    
    // Has methods generated for all backpack fields and columns!
    // Widgets not supported yet.
}
```

## Benefits:

*  **Requires no changes to existing code** and can be used alongside existing definitions.
* Fully compatible with **Fluent syntax** (read more about it [here](https://backpackforlaravel.com/docs/4.1/crud-fluent-syntax))
* Provides many different ways to declare your fields and columns - pick the one you like
* you can make your code more DRY by using **field collections** which also work as drop-in with current Backpack.

## Installation

```bash
composer require sergeyugai/backpack-fields-as-classes
```

## How to use 

There are 3 types of classes in this package:
* fields
* columns
* field collection

I'll explain their usage, but first let me convey the basic idea - instead of creating array like so:
```php
$this->crud->addField(
    [ // Text
        'name' => 'title',
        'label' => "Title",
        'type' => 'text',

        // optional
        //'prefix' => '',
    ]);
```
you use provided classes to construct object with the same configuration (as array above), but instead of setting array
keys you call object methods and pass in values, like so:
```php
$this->crud->addField(
    TextField::make()->name('title')->label('Title')->prefix('whatever')
);

// OR just directly without any CRUD calls:
TextField::make()->name('title')->label('Title')->prefix('whatever')

// Or by using CrudPanel:
\Backpack\CRUD\app\Library\CrudPanel\CrudPanel::addressAlgoliaField('field')
```
So we have 1 class per field type and per column type.

### Fields

You can create field by either creating new object or calling static method make().
They accept two optional methods - field name and field label.

Via constructor:
```php
class SomeCrudController extends CrudController
{
    public function setup()
    {
        //...
        $this->crud->addField( (new TextField())->...)
        $this->crud->addField( (new TextField('field name can be passed'))->...)
        $this->crud->addField( (new TextField('field name can be passed', 'field label can be passed'))->...)
        //...
    }
}
```

Via **make()**  or **name()**
```php
class SomeCrudController extends CrudController
{
    public function setup()
    {
        //...
        TextField::name('field name must be passed')->
        TextField::make('field name must passed')->...
        TextField::make('field name must be passed', 'field label can be passed')->...
        //...
    }
}
```

After that, you can chain various method calls. For instance, you know that text field can have "prefix" key - you can
chain that like so:

```php
TextField::make('title', 'Title')->prefix('whatever')
```

In this example you can omit 'Title' because backpack is going to provide this label automatically based on name:
```php
TextField::make('title')->prefix('whatever')
```

Or, if you want more clarity, feel free to not pass anything to constructor at all and instead pass name separately:
```php
TextField::make()->name('title')->prefix('whatever')
```

You can call ANY method, even methods not stated in documentation, even if method does not exist in my classes. 
The reason for it is that if you decide to use custom field, you can create your own declaration like so:
```php
    Field::make()
            ->name('my_custom_field')
            ->label('My field:')
            ->type('my_field_type')
            ->value('whatever')
            ->someBoolParam(true)
            ->someConfig(['extra' => function() { echo "hi"; }])
```
and that is going to be translated to array format understandable by backpack:

```php
            'name' => 'my_custom_field',
            'label' => 'My field:',
            'type' => 'my_field_type',
            'value' => 'whatever',
            'someBoolParam' => true,
            'someConfig' => ['extra' => function() { echo "hi"; }]
```

However, if you write your custom field, feel free to create new class and declare
available methods for your fields:
```php
class MyCustomField extends Field
{
    ... for possible method implementations, just check out source code of other
    ... fields and find the ones that better fit you for bools and stuff
}
```

### Columns

Columns behave exactly the same way as fields: 
```php
   ...
    TextColumn::make('title')->limit(60)
   ...
```

If you use **$this->crud** reference, you have to add asArray() in the end:
```php
$this->crud->addColumn(
    TextColumn::make('title')->limit(60)->asArray()
)
```

If this package gets popular, I'll submit a PR to Backpack to fix this so that there would not be "asArray()", but for
now that's how it is.

### Field collections

One of the biggest issues IMO with readability of Laravel Backpack code is that there are sometimes a lot of repetitive
things - for instance, if you use tabs, you could have lots of repetitive lines like:
```php
    'tab' => 'some_tab'
```
or you may want to configure numeric fields in a similar way, or... whatever else you may want to do.

So what you can do is put all those fields into a special collection (or create them using builder method of that
collection - i'll show both examples) and then call methods on that collection - and those methods will be applied
to each field.

Create collection from existing fields:

```php
$myTextField = TextField::make('title');
$myNumField = NumericField::make('page_num');

$this->crud->addFields(
   FieldsCollection::make([
        $myTextField, $myNumField
   ])->toArray()
);   
```

Create field of specific class (in this example, I create two fields of NumericField class):
```php
$this->crud->addFields(
   FieldsCollection::make()->addFieldsOfType(NumericField::class, [
      'min_price_of_item' => 'Min price of item', // 'min_price_of_item' is name, 'Min price of item' is label
      'max_price_of_item' => 'Max price of item',
   ])->toArray()
);   
```

And then you can apply whatever attributes that are the same:
```php
$this->crud->addFields(
   FieldsCollection::make()->addFieldsOfType(NumericField::class, [
      'min_price_of_item' => 'Min price of item', // 'min_price_of_item' is name, 'Min price of item' is label
      'max_price_of_item' => 'Max price of item',
   ])->prefix('$')->attributes(['step' => '5'])->tab('Pricing')->toArray()
);   
```

That's it - this collection knows how to represent its contents to Laravel Backpack's CRUD.

You can mix and match FieldsCollections of different types, but its up to you to control that specific field
actually supports a passed parameter (although its usually not an issue since its safe to call non-existing methods
on any field).


## Extra perks that you get

Besides having a nice object-oriented declaration, IDE auto completion and ability to quickly jump into classes
for more info, there are couple more things:

### $field as object

If you've written your own views for fields, you know you have to deal there with array as well. However, if you use
these classes, your $field variable **can be used as object** as well, allowing you to implement your own helper methods
there.

### Add your own methods!

You don't have to stick to helper methods just for custom views - you can extend classes however you like and
implement all sorts of other helper methods, syntax sugar, etc.

### Even more readability

To improve readability, I'd suggest doing something like:

```php
class SomeCrudController extends CrudController
{
    public function setup()
    {
        //...
        $this->crud->addField($this->titleField())
        //...
    }
    
    public function titleField(): TextField {
       return (new TextField('title))->label('...')->prefix(..);
    }
}
```

This way, you can add/remove fields by commenting/uncommenting a method call, and you also get "one method is responsible
for one field declaration", which may be clever for some methods with complex logic. Also gives your crud setup better
overview. Then again, its just a matter of taste.


## Rationale 

Well, for the following benefits:
1. IDE auto completion - the **biggest** reason for this, really
2. Readability can be improved (since you can subclass my classes and add some sugar syntax)
3. When building your own views for fields, you can use $field as object, rather than array, therefore
you can implement your own helper methods here.
4. Auto generation of fields - yeah, we auto generate all the field/column classes, I did not write actual fields manually.
About that - below.

More discussion is here - https://github.com/Laravel-Backpack/CRUD/issues/2604

## Code generation? 

Yes, that's quite **important** - pretty much all the fields and columns are automatically generated from backpack's docs.
Which gives us benefit of speed (I would kill myself if I had to write each field/column class manually), but there is a chance
that some of the fields did not get generated well - either help me by issuing a PR or extend the field in your
project and implement/override methods.

Backpack documentation for fields is column is **quite** consistent in its format (thus code generation was at all possible);
if in future Backpack author/contributors make it 100% consistent, it may drastically improve the quality of this package as well.

Anyway, you can play around with automatic code generation yourself. To call it, you just issue:
```bash
php generate.php
``` 

This way, for instance, you can substitute fields with older versions of backpack, that is - if documentation had more
or less the same format. The generator itself is in MainGenerator.php file, which reads documentation line by line,
acting as a state machine and gathering information on fields.

## What is supported?

Currently we support **fields** and **columns**. As list grows, I'll add more stuff here.

## Tests?

There is very little testing; if this gets popular and backpack documentation is updated to better structure, then I'll
add some tests, which would probably be autogenerated as well (at least partially) for all those fields and columns.

## Contributing

Currently this project is just a helper to me, but pull requests are welcome.

You could help with:
1. Docs (add jokes, remove jokes, make things more clear)
2. Testing
3. Extending functionality
4. Bringing more syntax sugar

You could also help indirectly by making PRs for backpack's documentation to improve code generation for this package -
that way you'd both help here and in backpack.
