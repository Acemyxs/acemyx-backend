<?php

class __Mustache_1ec53177138c5d89f4871efa010dd715 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="fp-def-search search-input-group d-inline-flex justify-content-between w-100">
';
        $buffer .= $indent . '    <label class="sr-only" for="reposearch">';
        $value = $context->find('str');
        $buffer .= $this->section838c131eb303fc7142fc88ee7e5ab99d($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    <span class="search-input-icon">
';
        $buffer .= $indent . '        <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '    <input type="search" class="search-input w-100 withclear" id="reposearch" name="s" placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section367f09614bfd8b218f547713d89473bf($context, $indent, $value);
        $buffer .= '"/>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section838c131eb303fc7142fc88ee7e5ab99d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchrepo, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchrepo, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section367f09614bfd8b218f547713d89473bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, repository';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'search, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
