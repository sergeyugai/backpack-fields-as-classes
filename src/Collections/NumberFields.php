<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Collections;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\NumberField;

class NumberFields {
    public static function make($namesToLabel) {
        $fields = [];
        foreach ($namesToLabel as $name => $label) {
            $fields[] = new NumberField($name, $label);
        }
        return $fields;
    }
}
