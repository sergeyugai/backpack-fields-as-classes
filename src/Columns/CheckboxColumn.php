<?php

namespace SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns;

class CheckboxColumn extends Column
{ 

    protected $result = ['type' => 'checkbox']; 

    public function name(string $value): CheckboxColumn
    {
        $this->offsetSet('name', $value);
        return $this;
    }
    
    
    public function label(string $value): CheckboxColumn
    {
        $this->offsetSet('label', $value);
        return $this;
    }
    
    
    public function priority(string $value): CheckboxColumn
    {
        $this->offsetSet('priority', $value);
        return $this;
    }
    
    
    public function searchLogic(bool $value): CheckboxColumn
    {
        $this->offsetSet('searchLogic', $value);
        return $this;
    }
    
    
    public function orderable(bool $value): CheckboxColumn
    {
        $this->offsetSet('orderable', $value);
        return $this;
    }
    
    
    public function visibleInModal(bool $value): CheckboxColumn
    {
        $this->offsetSet('visibleInModal', $value);
        return $this;
    }
    
    }