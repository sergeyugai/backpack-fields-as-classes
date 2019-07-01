<?php


namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;


use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Field;

class FieldsCollection extends Arrayable implements \Countable
{
    public function __construct($fields = null)
    {
        if ($fields !== null) {
            foreach ($fields as $f) {
                $this->addField($f);
            }
        }
    }

    public function addField(Field $field): FieldsCollection {
        $this->result[] = $field;
        return $this;
    }

    public function addFieldsOfType($class, $nameToLabelMap): FieldsCollection {
        foreach ($nameToLabelMap as $name => $label) {
            $f = new $class($name, $label);
            $this->addField($f);
        }
        return $this;
    }

    public function __call($name, $arguments): FieldsCollection
    {
        foreach ($this->result as $field) {
            call_user_func_array([$field, $name], $arguments);
        }
        return $this;
    }

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->result);
    }
}