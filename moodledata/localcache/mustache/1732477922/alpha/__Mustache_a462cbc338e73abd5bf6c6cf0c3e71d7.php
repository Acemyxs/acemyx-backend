<?php

class __Mustache_a462cbc338e73abd5bf6c6cf0c3e71d7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row no-gutters">
';
        $buffer .= $indent . '    <div class="col">';
        $blockFunction = $context->findInBlock('column1');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('col1content'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="col">';
        $blockFunction = $context->findInBlock('column2');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('col2content'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="col">';
        $blockFunction = $context->findInBlock('column3');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('col3content'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
