<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class Field
 * This is the base class. It can be used separately to represent ANY field.
 *
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 */

class Field extends Arrayable
{
    protected $type = 'text';
    /**
     * Field constructor.
     *
     * @param string $name
     * @param string $label
     */
    public function __construct(string $name, string $label = null)
    {
        $this->attributes = ['type' => $this->type];
        parent::__construct($name);

        $this->offsetSet('wrapperAttributes', []);
        $this->offsetSet('attributes', []);
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
     * Add field to certain tab
     *
     * @param string $value
     * @return Field
     */
    public function tab(string $value): self {
        $this->offsetSet('tab', $value);
        return $this;
    }

    public function label(string $label): self
    {
        $this->offsetSet('label', $label);
        return $this;
    }

    public function type(string $type): self
    {
        $this->offsetSet('type', $type);
        return $this;
    }

    /**
     * With this magic method, we have unlimited usage potential.
     * Like $field->whateverAttribute('someValue') would turn into ['whateverAttribute' => 'someValue']
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        $this->offsetSet($name, $arguments[0]);
        return $this;
    }

    public function toArray()
    {
        return $this->attributes;
    }

    public function asArray()
    {
        return $this->attributes;
    }
}
