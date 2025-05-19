<?php

class __Mustache_1078c6a46c3d2c6485e14c6af4a959d6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mt-1 d-inline-block w-100">
';
        $buffer .= $indent . '    <div class="float-left">
';
        $buffer .= $indent . '        <select id="bulk-action" class="select custom-select">
';
        $value = $context->find('options');
        $buffer .= $this->sectionD99b098a48db6702510c82ac9b8727ba($context, $indent, $value);
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        <button class="btn btn-primary" id="confirm-bulk-action">';
        $value = $context->find('str');
        $buffer .= $this->section2e8e2bcbe2f7e6e2a1b571c0ce08b52f($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="float-right">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('perpage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD99b098a48db6702510c82ac9b8727ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{ value }}">{{ name }}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e8e2bcbe2f7e6e2a1b571c0ce08b52f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' confirm ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' confirm ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
