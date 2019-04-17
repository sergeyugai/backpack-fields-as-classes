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

## What is supported?

Currently we support **fields** and **columns**. As list grows, I'll add more stuff here.

## Contributing

Currently this project is just helper to me, but pull requests are welcome.

You could help with:
1. Docs (add jokes, remove jokes, make things more clear)
2. Testing
3. Extending functionality
4. Bringing more syntax sugar
