<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Common;

use Backpack\CRUD\app\Library\CrudPanel\CrudField;

class Arrayable extends CrudField implements \ArrayAccess, \Iterator
{
    /**
     * Internal array, which is basically what we are going to provide to whoever accesses us
     * @var array
     */
    protected $index = 0;

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
    public function &offsetGet($offset)
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
        $this->store();
    }

    public function store(): void
    {
        // TODO: remove this method. its supposed to be the same as CrudField->save(), but that one is private.
        // so workaround was obv to copy it.

        $key = $this->attributes['name'];

        if ($this->crud()->hasFieldWhere('name', $key)) {
            $this->crud()->modifyField($key, $this->attributes);
        } else {
            $this->crud()->addField($this->attributes);
        }
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

    /**
     * Return the current element
     * @link https://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        $k = array_keys($this->attributes);
        $var = $this->attributes[$k[$this->index]];
        return $var;
    }

    /**
     * Move forward to next element
     * @link https://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $k = array_keys($this->attributes);
        if (isset($k[++$this->index])) {
            $var = $this->attributes[$k[$this->index]];
            return $var;
        }
        else
        {
            return false;
        }
    }

    /**
     * Return the key of the current element
     * @link https://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        $k = array_keys($this->attributes);
        $var = $k[$this->index];
        return $var;
    }

    /**
     * Checks if current position is valid
     * @link https://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        $k = array_keys($this->attributes);
        $var = isset($k[$this->index]);
        return $var;
    }

    /**
     * Rewind the Iterator to the first element
     * @link https://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->index = 0;
    }
}