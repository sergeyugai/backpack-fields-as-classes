# Fields as classes for Laravel Backpack 

## TLDR

Package allows to add fields/columns/etc to [Laravel backpack](https://backpackforlaravel.com)  while having them as classes
Essentially, instead of 

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

you would use

```php
$this->crud->addField(
    (new TextField('title'))
        ->label("Title")
        ->prefix('1.')
);
```

## Why tho?

Well, for the following benefits:
1. IDE autocompletion - the **biggest** reason for this, really
2. Readability can be improved (since you can subclass my classes and add some sugar syntax)
3. When building your own views for fields, you can use $field as object, rather than array, therefore
you can implement your own helper methods here.
4. Autogeneration of fields - yeah, we autogenerate those, I did not write actual fields manually.

## Install

```bash
composer require sergeyugai/backpack-fields-as-classes
```

## Usage

Just use the classes in your code:

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

**Important** - pretty much all the fields and columns are automatically generated from backpack's docs.
Which gives us benefit of speed (I would kill myself if I had to write each field manually), but there is a chance
that some of the fields did not get generated well - either help me by issuing a PR or extend the field in your
project and implement/override methods.

Also, this is something I wrote quick-and-dirty for my own usage. If community shows (unlikely) interest, I'll be happy
to improve the package, but for my current purposes this whole thing is more than enough to get running.


## What is supported?

Currently we support **fields** and **columns**. As list grows, I'll add more stuff here.

## Contributing

Currently this project is just helper to me, but pull requests are welcome.

You could help with:
1. Docs (add jokes, remove jokes, make things more clear)
2. Testing
3. Extending functionality
4. Bringing more syntax sugar
