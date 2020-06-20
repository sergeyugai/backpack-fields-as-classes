<?php declare(strict_types=1);

namespace Tests;

use Backpack\CRUD\Tests\Unit\CrudPanel\BaseCrudPanelTest;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\Column;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Field;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TextField;

final class FluentSyntaxTest extends BaseCrudPanelTest
{
    public function testDefaultFieldSyntax(): void
    {
        $this->crudPanel->addField(Field::make('test'));
        $fields = $this->crudPanel->getFields();
        $this->assertCount(1, $fields);
    }

    public function testFluentSyntax(): void
    {
        $name = 'fluent-field';
        $label = 'Fun stuff:';
        Field::name($name)->label($label);

        $fields = $this->crudPanel->getFields();
        $this->assertCount(1, $fields);
        $this->assertArrayHasKey($name, $fields);
        $fieldToTest = $fields[$name];
        $this->assertEquals('text', $fieldToTest['type']);
        $this->assertEquals($label, $fieldToTest['label']);
    }

    public function testSomeMagic(): void
    {
        $bool = true;
        $string = 'some text stuff';
        $number = 42;
        $array = ['bunch of' => 'things here'];
        $closure = function () {
            return 69;
        };

        $name = 'magicField';
        $label = 'Magic field tests that all sorts of things can be passed via magic methods';
        Field::make($name, $label)
            ->type('MADE UP TYPE')
            ->isLogisticallyAstounding($bool)
            ->stringStringString($string)
            ->whatWasTheQuestion($number)
            ->options($array)
            ->executeThis($closure);

        $fields = $this->crudPanel->getFields();
        $this->assertCount(1, $fields);
        $this->assertArrayHasKey($name, $fields);
        $fieldToTest = $fields[$name];

        $this->assertEquals('MADE UP TYPE', $fieldToTest['type']);
        $this->assertEquals($bool, $fieldToTest['isLogisticallyAstounding']);
        $this->assertEquals($string, $fieldToTest['stringStringString']);
        $this->assertEquals($number, $fieldToTest['whatWasTheQuestion']);
        $this->assertEquals($array, $fieldToTest['options']);
        $this->assertEquals($closure(), $fieldToTest['executeThis']());
    }

    public function testTextField(): void
    {
        $hint = 'Type username in here';
        $name = 'username';
        $label = 'User name:';
        TextField::make($name, $label)->hint($hint);

        $fields = $this->crudPanel->getFields();
        $this->assertCount(1, $fields);
        $this->assertArrayHasKey($name, $fields);
        $fieldToTest = $fields[$name];

        $this->assertEquals($name, $fieldToTest['name']);
        $this->assertEquals($label, $fieldToTest['label']);
        $this->assertEquals($hint, $fieldToTest['hint']);
    }

    // TODO: this test requires db and I am not really ready to do this.
    // I did check it in my project though.
    public function checkThatColumnsWorkToo(): void
    {
        $name = 'fluent-field';
        $label = 'Fun stuff:';
        Column::make($name)->testAttribute($label);

        $columns = $this->crudPanel->column($name);
        $this->assertCount(1, $columns);
        $this->assertArrayHasKey($name, $columns);
        $columnToTest = $columns[$name];
        $this->assertEquals('text', $columnToTest['type']);
        $this->assertEquals($label, $columnToTest['testAttribute']);
    }
}


