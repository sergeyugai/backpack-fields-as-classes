<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

use Backpack\CRUD\app\Library\CrudPanel\CrudColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Field;

/**
 * Class Column
 * This is the base class. It can be used separately to represent ANY column.
 *
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns
 */

class Column extends CrudColumn implements \ArrayAccess
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

    /**
     * Whether a offset exists
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->attributes);
    }

    /**
     * Offset to retrieve
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset)
    {
        return $this->attributes[$offset];
    }

    /**
     * Offset to set
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value)
    {
        $this->attributes[$offset] = $value;
    }

    /**
     * Offset to unset
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset)
    {
        unset($this->attributes[$offset]);
    }

    public function asArray(): array {
        return $this->attributes;
    }
}