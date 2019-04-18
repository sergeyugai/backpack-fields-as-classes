<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields;

/**
 * Class Field
 * This is the base class. It can be used separately to represent ANY field.
 *
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields
 */

class Field extends Arrayable
{
    /**
     * Internal array, which is basically what we are going to provide to whoever accesses us
     * @var array
     */
    protected $result = ['type' => 'text'];

    /**
     * Field constructor.
     *
     * @param string $name
     * @param string $label
     */
    public function __construct(string $name = null, string $label = null)
    {
        $this->offsetSet('wrapperAttributes', new Arrayable());
        if (! is_null($name)) {
            $this->offsetSet('name', $name);
            if (is_null($label)) {
                $this->offsetSet('label', ucfirst($name));
            }
        }
        if (! is_null($label)) {
            $this->offsetSet('label', ucfirst($label));
        }
    }

    public function tab(string $value): self {
        $this->offsetSet('tab', $value);
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
}
