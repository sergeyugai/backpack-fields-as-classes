<?php

/**
 * This file generates fields from Backpack documentation. Yeah, that's how it works.
 */

require_once 'vendor/autoload.php';

$backpackFieldsDoc = 'https://raw.githubusercontent.com/Laravel-Backpack/Docs/master/4.1/crud-fields.md';
$backpackColumnsDoc = 'https://raw.githubusercontent.com/Laravel-Backpack/Docs/master/4.1/crud-columns.md';
$backpackFieldsDocBasePath = 'https://backpackforlaravel.com/docs/4.1/crud-fields#';
$backpackColumnsDocBasePath = 'https://backpackforlaravel.com/docs/4.1/crud-columns#';
$generator = new \SergeYugai\Laravel\Backpack\FieldsAsClasses\Generators\MainGenerator();
$generator->generateFields($backpackFieldsDoc, $backpackFieldsDocBasePath);
$generator->generateColumns($backpackColumnsDoc, $backpackColumnsDocBasePath);
$generator->generateCrudMacroable();
$generator->generateIdeHelper();
