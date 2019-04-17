<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Generators;

class MainGenerator
{
    private $docPath;
    /**
     * @var array
     */
    private $fields;
    /**
     * @var bool
     */
    private $inCode;

    public function __construct($docPath)
    {
        $this->docPath = $docPath;
    }

    public function generateFields() {
        $data = file_get_contents($this->docPath);
        $lines = explode("\n", $data);
        $hasStarted = false;
        foreach ($lines as $l) {
            if ($hasStarted) {
                $this->parseLine($l);
            } else {
                $hasStarted = (strpos($l, '#### Split Fields into Tabs') !== FALSE);
            }
        }
        foreach ($this->fields as $fieldName => $fieldDescription) {
            $this->generateClass($fieldName, $fieldDescription, '/../Fields/', 'Field');
        }
    }

    public function generateColumns()
    {
        $data = file_get_contents($this->docPath);
        $lines = explode("\n", $data);
        $hasStarted = false;
        foreach ($lines as $l) {
            if (strpos($l, '### Custom Search Logic for Columns') !== FALSE) break;
            if ($hasStarted) {
                $this->parseLine($l);
            } else {
                $hasStarted = (strpos($l, '## Default Column Types') !== FALSE);
            }
        }
        foreach ($this->fields as $fieldName => $fieldDescription) {
            $this->generateClass($fieldName, $fieldDescription, '/../Columns/', 'Column');
        }
    }

    private function parseLine(string $l)
    {
        if ($this->inCode) {
            if ($this->inFieldDefinition) {
                $trimmed = trim($l);
                if (strpos($trimmed, '=>')) {
                    $bits = explode('=>', $trimmed);
                    $item = trim(str_replace("'", "", $bits[0]));
                    $item = trim(str_replace('//', '', $item));
                    $itemType = 'string';
                    if (strpos($bits[1], '[') !== FALSE) {
                        $itemType = 'array';
                    } elseif (strpos($bits[1], 'true') !== FALSE || strpos($bits[1], 'false') !== FALSE) {
                        $itemType = 'bool';
                    }
                    $this->fieldItems[$item] = $itemType;
                }
            } else {
                //$fieldDefinitionRegexp = '/\[\s+\/\/([a-z A-Z0-9_\-,.]+)/';
                //$matches = [];
                //preg_match($fieldDefinitionRegexp, $l, $matches);
                if (strpos($l, '[') !== FALSE) {
                    $this->inFieldDefinition = true;
                    // $this->fieldName = $matches[1];
                    $this->fieldName = $this->fieldNameToConsider;
                    $this->fieldItems = [];
                }
            }
            if (strpos($l, '```') !== FALSE) {
                $this->inCode = false;
                if (array_key_exists($this->fieldName, $this->fields)) {
                    $this->fields[$this->fieldName] = array_merge($this->fields[$this->fieldName], $this->fieldItems);
                } else {
                    $this->fields[$this->fieldName] =  $this->fieldItems;
                }
                $this->inFieldDefinition = false;
            }
        } else {
            $this->inCode = strpos($l, '```php') !== FALSE;

            if (strpos($l, '### ') !== FALSE) {
                $this->fieldNameToConsider = str_replace('### ', '', $l);
            }
        }
    }

    private function generateClass(string $fieldName, array $fieldDescription, $path, $prefix)
    {
        $className = $this->getClassNameForFieldName($fieldName).$prefix;
        if ($className === $prefix) return;

        $classTemplate =<<<TEMPLATE
<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\\{$prefix}s;

class {$className} extends {$prefix}
{ 

    protected \$result = ['type' => '{$fieldName}']; 

TEMPLATE;

        foreach ($fieldDescription as $fieldName => $fieldType) {
            if ($fieldName != 'type') {
                $classTemplate .= <<<METHOD_TEMPLATE

    public function {$fieldName}({$fieldType} \$value): {$className}
    {
        \$this->offsetSet('{$fieldName}', \$value);
        return \$this;
    }
    
    
METHOD_TEMPLATE;

            }
        }

        $classTemplate .= '}';

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



}