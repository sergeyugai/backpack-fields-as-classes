<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Generators;

class MainGenerator
{
    /**
     * @var array
     */
    private $fields;
    private $macroable = [];

    /**
     * @var bool
     */
    private $inCode;
    private $fieldDocs;
    private $fieldItems;
    /**
     * @var bool
     */
    private $inFieldDefinition;
    private $fieldName;
    private $fieldNameToConsider;
    private $fieldDocumentation;

    public function generateFields($docPath, $basePath): void {
        $this->parseAndRun($docPath, function () use ($basePath) {
            foreach ($this->fields as $fieldName => $fieldDescription) {
                $this->generateClass($fieldName, $fieldDescription, '/../Fields/', 'Field', $basePath);
                $this->generateCollectionsForClass($fieldName, $fieldDescription, '/../Collections/', 'Collection');
                $this->macroable['Field'] = $this->fields;
            }
        }, '#### Split Fields into Tabs');
    }

    public function generateColumns($docPath, $basePath): void
    {
        $this->parseAndRun($docPath, function () use ($basePath) {
            foreach ($this->fields as $fieldName => $fieldDescription) {
                $this->generateClass($fieldName, $fieldDescription, '/../Columns/', 'Column', $basePath);
            }
            $this->macroable['Column'] = $this->fields;
        }, '## Default Column Types', '### Custom Search Logic for Columns');
    }

    public function parseAndRun($docPath, $callback, $parseFromLine = null, $parseTillLine = null) {
        $data = file_get_contents($docPath);
        $lines = explode("\n", $data);
        $hasStarted = false;
        $this->fields = [];
        $this->inCode = false;
        $this->fieldItems = [];
        $this->inFieldDefinition = false;
        $this->fieldDocumentation = [];
        $this->fieldDocs = [];
        $this->fieldName = $this->fieldNameToConsider = '';
        foreach ($lines as $l) {
            $isThisTheFinalLine = ($parseTillLine !== null) && strpos($l, $parseTillLine) !== FALSE;
            if ($isThisTheFinalLine) {
                break;
            }
            if ($hasStarted) {
                $this->parseLine($l);
            } else {
                $hasStarted = (strpos($l, $parseFromLine) !== FALSE);
            }
        }

        $callback();
    }

    private function parseLine(string $l):void
    {
        if ($this->inCode) {
            if ($this->inFieldDefinition) {
                $this->addFieldItemFromLine($l);
            } else if (strpos($l, '[') !== FALSE) {
                $this->inFieldDefinition = true;
                $this->fieldName = $this->fieldNameToConsider;
                $this->fieldItems = [];
            }
            if (strpos($l, '```') !== FALSE) {
                $this->inCode = false;
                $this->finalizeFieldDefinition();
            }
        } else {
            $this->inCode = strpos($l, '```php') !== FALSE;

            if (strpos($l, '### ') !== FALSE) {
                $this->fieldNameToConsider = str_replace('### ', '', $l);
            } else {
                $this->fieldDocumentation[] = $l;
            }
        }
    }

    private function generateCollectionsForClass(string $fieldName, array $fieldDescription, $path, $prefix): void
    {
        $className = $this->getClassNameForFieldName($fieldName).'Fields';
        $fieldClassName = $this->getClassNameForFieldName($fieldName).'Field';

        $posOfBracket = strpos($fieldName, '(');
        $properFieldType = $fieldName;
        if ($posOfBracket) {
            $properFieldType = substr($fieldName, 0, $posOfBracket - 1);
        }
        $properFieldType = trim($properFieldType);


        if ($className === $prefix) return;

        $classTemplate =<<<TEMPLATE
<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\{$fieldClassName};

/**
 * Class {$className} 
 * Represents collection of fields 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s
 */
class {$className} extends FieldsCollection 
{ 
    // We re-declare this so that IDE would pick up 
    public static function make(\$fields = null) : {$className}
    {
        return new self(\$fields, {$fieldClassName}::class);
    }
    
TEMPLATE;

        foreach ($fieldDescription as $fName => $fieldType) {
            if ($fName !== 'type' && $fName !== 'name') {

                $defaultValue = $fieldType === 'bool' ? ' = true' : '';
                $extra_code = '';
                $fieldType = $fieldType !== '' ? $fieldType.' ' : $fieldType;
                $classTemplate .= <<<METHOD_TEMPLATE

    public function {$fName}({$fieldType}\$value{$defaultValue}): {$className}
    {
        foreach (\$this->result as \$f) {
            \$f->{$fName}(\$value);
        }
        return \$this;
    }
    
    
METHOD_TEMPLATE;

            }
        }

        $classTemplate .= "\n}";

        file_put_contents(dirname(__FILE__).$path.$className.'.php', $classTemplate);
    }

    private function generateClass(string $fieldName, array $fieldDescription, $path, $prefix, $docSiteBasePath): void
    {
        $className = $this->getClassNameForFieldName($fieldName).$prefix;

        $posOfBracket = strpos($fieldName, '(');
        $properFieldType = $fieldName;
        if ($posOfBracket) {
            $properFieldType = substr($fieldName, 0, $posOfBracket - 1);
        }
        $properFieldType = trim($properFieldType);


        if ($className === $prefix) return;

        $docs = array_key_exists($fieldName, $this->fieldDocs) ? implode("\n", array_map(static function ($item) {
            return '* '.$item;
        }, $this->fieldDocs[$fieldName])) : '';
        $classTemplate =<<<TEMPLATE
<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s;

use SergeYugai\Laravel\Backpack\FieldsAsClasses\Common\Arrayable;

/**
 * Class {$className} 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s
 * @link {$docSiteBasePath}$fieldName Documentation
 $docs
 */
class {$className} extends {$prefix}
{ 

    protected \$type = '{$properFieldType}';

    // We re-declare this so that IDE would pick up 
    public static function make(string \$name = null, string \$label = null) : {$className}
    {
        return new self(\$name, \$label);
    }
    
TEMPLATE;

        foreach ($fieldDescription as $fName => $fieldType) {
            if ($fName !== 'type' && $fName !== 'name') {

                $defaultValue = $fieldType === 'bool' ? ' = true' : '';
                $extra_code = '';
                if ($fieldType === 'array') {
                    /* TODO: review if this needed.
                    $extra_code=<<<EXTRA
            
        // necessary conversion    
        \$arrayable = new Arrayable();
        foreach (\$value as \$key => \$val) {
            \$arrayable[\$key] = \$val;
        }
        \$value = \$arrayable;
EXTRA; */
                }
                $fieldType = $fieldType !== '' ? $fieldType.' ' : $fieldType;
                $classTemplate .= <<<METHOD_TEMPLATE

    public function {$fName}({$fieldType}\$value{$defaultValue}): {$className}
    {{$extra_code}
        \$this->offsetSet('{$fName}', \$value);
        return \$this;
    }
    
    
METHOD_TEMPLATE;

            }
        }

        $classTemplate .= "\n}";

        file_put_contents(dirname(__FILE__).$path.$className.'.php', $classTemplate);
    }

    private function getClassNameForFieldName(string $fieldName)
    {
        $posOfBracket = strpos($fieldName, '(');
        if ($posOfBracket) {
            $fieldName = substr($fieldName, 0, $posOfBracket - 1);
        }
        $trimmed = trim($fieldName);
        if (strpos($trimmed, '_')) {
            return implode('', array_map(function ($i) { return ucfirst($i); }, explode('_', $trimmed)));
        } else {
            return ucfirst($trimmed);
        }
    }

    public function generateCrudMacroable(): void
    {
        $template = <<<SERVICE_PROVIDER
<?php


namespace SergeYugai\Laravel\Backpack\FieldsAsClasses;


use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
@USAGES@

class FieldsClassesServiceProvider
{
    protected \$defer = false;
    
    public function boot(): void
    {
@MACROABLE_CODE@
    }
}

SERVICE_PROVIDER;
        $macroCode = '';
        $usages = '';
        foreach ($this->macroable as $suffix => $fields) {
            foreach ($fields as $fieldName => $fieldDescription) {
                if ($fieldName === null || $fieldName === '') {
                    continue;
                }
                $className = $this->getClassNameForFieldName($fieldName);
                $macroMethodName = lcfirst($className);
                $usages .= "use SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$suffix}s\\{$className}{$suffix};\n";
                $macroCode .= <<<MACRO
        CrudPanel::macro('{$macroMethodName}{$suffix}', function (string \$name) {
            return {$className}{$suffix}::name(\$name);
        });

MACRO;

            }
        }

        $code = str_replace(array('@MACROABLE_CODE@', '@USAGES@'), array($macroCode, $usages), $template);
        file_put_contents(__DIR__.'/../FieldsClassesServiceProvider.php', $code);

    }

    public function generateIdeHelper()
    {
        $template = <<<IDE_HELPER
<?php


namespace Backpack\CRUD\app\Library\CrudPanel {

    @USAGES@

    if (false) {
        /**
         * Class CrudPanel
         * @package Backpack\CRUD\app\Library\CrudPanel
         *
         */
        class CrudPanel {
@MACROABLE_CODE@
        }
    }
}
IDE_HELPER;
        $macroCode = '';
        $usages = '';
        foreach ($this->macroable as $suffix => $fields) {
            foreach ($fields as $fieldName => $fieldDescription) {
                if ($fieldName === null || $fieldName === '') {
                    continue;
                }
                $className = $this->getClassNameForFieldName($fieldName);
                $macroMethodName = lcfirst($className);
                $usages .= "use SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$suffix}s\\{$className}{$suffix};\n";
                $macroCode .= <<<MACRO
            public static function {$macroMethodName}{$suffix}(string \$name): {$className}{$suffix} 
            {
                return {$className}{$suffix}::make(\$name);
            }

MACRO;

            }
        }

        $code = str_replace(array('@MACROABLE_CODE@', '@USAGES@'), array($macroCode, $usages), $template);
        file_put_contents(__DIR__.'/../../ide_helper.php', $code);
    }

    private function getCollectionClassNameForFieldName(string $fieldName) {
        return $this->getClassNameForFieldName($fieldName);
    }

    private function addFieldItemFromLine(string $l): void
    {
        $trimmed = trim($l);
        if (strpos($trimmed, '=>')) {
            $bits = explode('=>', $trimmed);
            $item = trim(str_replace("'", "", $bits[0]));
            $item = trim(str_replace('//', '', $item));
            $itemType = '';
            if (strpos($bits[1], '[') !== FALSE) {
                $itemType = 'array';
            } elseif (strpos($bits[1], 'true') !== FALSE || strpos($bits[1], 'false') !== FALSE) {
                $itemType = 'bool';
            } elseif (strpos($bits[1], 'function ') !== FALSE) {
                $itemType = ''; // callback
            } elseif (strpos($bits[1], '\'') !== FALSE || strpos($bits[1], '"') !== FALSE) {
                $itemType = 'string';
            }
            if (array_key_exists($item, $this->fieldItems)) {
                $this->fieldItems[$item] = '';
            } else {
                $this->fieldItems[$item] = $itemType;
            }
        }
    }

    private function finalizeFieldDefinition():void
    {
        if (array_key_exists($this->fieldName, $this->fields)) {
            $this->fields[$this->fieldName] = array_merge($this->fields[$this->fieldName], $this->fieldItems);
        } else {
            $this->fields[$this->fieldName] =  $this->fieldItems;
        }
        if (array_key_exists($this->fieldName, $this->fieldDocs)) {
            $this->fieldDocs[$this->fieldName] = array_merge($this->fieldDocs[$this->fieldName], $this->fieldDocumentation);
        } else {
            $this->fieldDocs[$this->fieldName] =  $this->fieldDocumentation;
        }
        $this->fieldDocumentation = [];
        $this->inFieldDefinition = false;
    }


}