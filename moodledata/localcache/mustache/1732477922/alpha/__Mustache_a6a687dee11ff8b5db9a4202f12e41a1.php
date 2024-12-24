<?php

class __Mustache_a6a687dee11ff8b5db9a4202f12e41a1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<button class="btn btn-link btn-icon icon-size-3" data-hider="expand" data-col="';
        $value = $this->resolveValue($context->find('field'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 5.75V18.25"></path>
';
        $buffer .= $indent . '        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.25 12L5.75 12"></path>
';
        $buffer .= $indent . '      </svg>
';
        $buffer .= $indent . '    <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section6b1ee772a86b2c12dd8091591b889c43($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</button>
';

        return $buffer;
    }

    private function section6b1ee772a86b2c12dd8091591b889c43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reopencolumn, gradereport_grader, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'reopencolumn, gradereport_grader, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
