<?php

/**
 * This file generates fields from Backpack documentation. Yeah, that's how it works.
 */

require_once 'vendor/autoload.php';

$backpackFieldsDoc = 'https://raw.githubusercontent.com/Laravel-Backpack/Docs/master/3.5/crud-fields.md';
$backpackColumnsDoc = 'https://raw.githubusercontent.com/Laravel-Backpack/Docs/master/3.5/crud-columns.md';
$generator = new \SergeYugai\Laravel\Backpack\FieldsAsClasses\Generators\MainGenerator();
$generator->generateFields($backpackFieldsDoc);
$generator->generateColumns($backpackColumnsDoc);
