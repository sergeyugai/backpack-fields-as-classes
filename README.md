# Fields as classes for Laravel Backpack 

This is a drop-in solution for [Laravel backpack](https://backpackforlaravel.com) to replace column/fields
declarations-via-array with object-oriented approach. Allows your IDE to help you write that stuff.

**Requires no changes to existing code** and can be used alongside existing definitions.

Also you can make your code more DRY by using **field collections** which also work as drop-in with current Backpack.

* Code example
* Quick start
* Extra perks that you get
* Collections
* Rationale behind this
* Code generation? 
* What is supported?
* Contributions

## Code example

If you've used Laravel Backpack, you are used to have lots of these in your code:

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

While nothing wrong with that, I personally don't like constantly jumping to documentation
to look up an option. Besides, there are all sorts of typos and other bad things related to 
magic values.

This package allows you to use classes instead (**or alongside**):

```php
$this->crud->addField(
    (new TextField('title'))
        ->label("Title")
        ->prefix('1.')
);
```

or, if you prefer:

```php
$this->crud->addField(
    TextField::make('title')
        ->label("Title")
        ->prefix('1.')
);
```

If you have repeatable code, you could use something cool like this:
```php
$this->crud->addFields(
    FieldCollection::make([
        TextFields([
            'name' => 'First name',
            'surname' => 'Last name',
            TextField::make('some_prefixed_field')->label('I need special stuff')->prefix('Stuff:'),
        ])->tab('User'),
        NumericFields([
            'visits' => '# Visits',
            'purchases' => '# Purchases',
            'profile_views' => '# Views'
        ])->prefix('#')->suffix(' times')->tab('Stats')
    ])
    ->hint('Global hint for all the fields, or something else')
    ->attributes([...]) // set for all fields in collection
);
```

Read about collections below.

## Quick start

Super simple to get this working.

Install via composer:

```bash
composer require sergeyugai/backpack-fields-as-classes
```

And just start using classes in your code:

```php
class SomeCrudController extends CrudController
{
    public function setup()
    {
        //...
        $this->crud->addField(new TextField()->...)
        //...
    }
}
```

All the conversion to according arrays is done automatically.

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

## Collections

One of the biggest issues IMO with readability of Laravel Backpack code is that there are sometimes a lot of repetitive
things - for instance, if you use tabs, you could have lots of repetitive lines like:
```php
    'tab' => 'some_tab'
```
which, together with lots of other repetitive stuff, is just not cool.

Well, I decided that it would be cool to create Fields Collections on top of the Fields that I've created.
The way it works is:
1. You create a collection either from existing fields or using shorthand methods
2. And then apply all of the attributes that are the same.

For instance:
```php
$this->crud->addFields(
   FieldsCollection::make()->addFieldsOfType(NumericField::class, [
      'min_price_of_item' => 'Min price of item',
      'max_price_of_item' => 'Max price of item',
   ])->prefix('$')->attributes(['step' => '5'])->tab('Pricing')
);   
```

That's it - this collection knows how to represent its contents to Laravel Backpack's CRUD.

You can mix and match FieldsCollections of different types, but its up to you to control that specific field
actually supports a passed parameter (although its usually not an issue since its safe to call non-existing methods
on any field).

## Rationale 

Well, for the following benefits:
1. IDE auto completion - the **biggest** reason for this, really
2. Readability can be improved (since you can subclass my classes and add some sugar syntax)
3. When building your own views for fields, you can use $field as object, rather than array, therefore
you can implement your own helper methods here.
4. Auto generation of fields - yeah, we auto generate all the field/column classes, I did not write actual fields manually.
About that - below.

## Code generation? 

Yes, that's quite **important** - pretty much all the fields and columns are automatically generated from backpack's docs.
Which gives us benefit of speed (I would kill myself if I had to write each field/column class manually), but there is a chance
that some of the fields did not get generated well - either help me by issuing a PR or extend the field in your
project and implement/override methods.

Backpack documentation for fields is column is quite consistent in its format (thus code generation was at all possible);
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

## Contributing

Currently this project is just helper to me, but pull requests are welcome.

Also, this is something I wrote quick-and-dirty for my own usage. If community shows (unlikely) interest, I'll be happy
to improve the package, but for my current purposes this whole thing is more than enough to get running.

You could help with:
1. Docs (add jokes, remove jokes, make things more clear)
2. Testing
3. Extending functionality
4. Bringing more syntax sugar
