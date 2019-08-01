<?php


namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;


use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Field;

class FieldsCollection extends Arrayable implements \Countable
{
    public function __construct($fields = null, $class = null)
    {
        if ($fields !== null) {
            foreach ($fields as $index => $f) {
                if ($f instanceof Field) {
                    $this->addField($f);
                } else if (is_string($index) && is_string($f)) {
                    if ($class !== null) {
                        $this->addField(new $class($index, $f));
                    } else {
                        $this->addField(new Field($index, $f));
                    }
                }
            }
        }
    }

    public static function make($fields = null)
    {
        return new FieldsCollection($fields);
    }

    public function addField(Field $field): FieldsCollection
    {
        $this->result[] = $field;
        return $this;
    }

    public function addFieldsOfType($class, $nameToLabelMap): FieldsCollection
    {
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

    public function tab($tabName): FieldsCollection
    {
        foreach ($this->result as $field) {
            $field->tab($tabName);
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

    public function toArray(): array {
        return $this->result;
    }
}