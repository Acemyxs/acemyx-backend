<?php

class __Mustache_3826849af7cfa8366f98895e8d67e87b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex category-content">
';
        $buffer .= $indent . '    <a aria-expanded="true" role="button" data-categoryid=';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' data-target=".cat_';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '[data-hidden=\'false\']" class="btn btn-icon mr-1 toggle-category" href="#">
';
        $buffer .= $indent . '        <span class="collapsed text-nowrap" title="';
        $value = $context->find('str');
        $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <svg aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
        $buffer .= '" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="expanded text-nowrap" title="';
        $value = $context->find('str');
        $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <svg aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
        $buffer .= '" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 14.25L12 10.75L8.75 14.25"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <span>';
        $value = $this->resolveValue($context->find('categoryname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
