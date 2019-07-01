<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Generators;

class MainGenerator
{
    /**
     * @var array
     */
    private $fields;
    /**
     * @var bool
     */
    private $inCode;
    private $fieldItems;
    /**
     * @var bool
     */
    private $inFieldDefinition;
    private $fieldName;
    private $fieldNameToConsider;

    public function generateFields($docPath, $basePath): void {
        $this->parseAndRun($docPath, function () use ($basePath) {
            foreach ($this->fields as $fieldName => $fieldDescription) {
                $this->generateClass($fieldName, $fieldDescription, '/../Fields/', 'Field', $basePath);
            }
        }, '#### Split Fields into Tabs');
    }

    public function generateColumns($docPath, $basePath): void
    {
        $this->parseAndRun($docPath, function () use ($basePath) {
            foreach ($this->fields as $fieldName => $fieldDescription) {
                $this->generateClass($fieldName, $fieldDescription, '/../Columns/', 'Column', $basePath);
            }
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
            }
        }
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

        $classTemplate =<<<TEMPLATE
<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s;

/**
 * Class {$className} 
 * @package SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s
 * @link {$docSiteBasePath}$fieldName Documentation
 */
class {$className} extends {$prefix}
{ 

    protected \$result = ['type' => '{$properFieldType}']; 

    // We re-declare this so that IDE would pick up 
    public static function make(string \$name = null, string \$label = null) : {$className}
    {
        return new self(\$name, \$label);
    }
    
TEMPLATE;

        foreach ($fieldDescription as $fName => $fieldType) {
            if ($fName !== 'type') {

                $defaultValue = $fieldType === 'bool' ? ' = true' : '';
                $extra_code = '';
                if ($fieldType === 'array') {
                    $extra_code=<<<EXTRA
            
        // necessary conversion    
        \$arrayable = new Arrayable();
        foreach (\$value as \$key => \$val) {
            \$arrayable[\$key] = \$val;
        }
        \$value = \$arrayable;
EXTRA;
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
        $this->inFieldDefinition = false;
    }


}