<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use Backpack\CRUD\app\Library\CrudPanel\CrudColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Field;

/**
 * Class Column
 * This is the base class. It can be used separately to represent ANY column.
 *
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 */

class Column extends Arrayable
{
    protected $type = 'text';
    /**
     * Column constructor.
     *
     * @param string $name
     * @param string $label
     */
    public function __construct(string $name = null, string $label = null)
    {
        $this->attributes = ['type' => $this->type];
        parent::__construct($name?:'');
        if ($name !== null) {
            $this->offsetSet('name', $name);
            if ($label === null) {
                $this->offsetSet('label', ucfirst($name));
            }
        }
        if ($label !== null) {
            $this->offsetSet('label', ucfirst($label));
        }
    }

    public static function name($name): self
    {
        return self::make($name);
    }

    public static function make(string $name, string $label = null): self
    {
        return new self($name, $label);
    }

    /**
     * With this magic method, we have unlimited usage potential.
     * Like $col->whateverAttribute('someValue') would turn into ['whateverAttribute' => 'someValue']
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        $this->offsetSet($name, $arguments[0]);
        return $this;
    }





    public function asArray(): array {
        return $this->attributes;
    }
}