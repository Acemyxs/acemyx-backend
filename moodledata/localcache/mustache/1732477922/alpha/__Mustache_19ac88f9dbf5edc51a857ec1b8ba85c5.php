<?php

class __Mustache_19ac88f9dbf5edc51a857ec1b8ba85c5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="pro-export-title p-3 theme-1-bg text-white">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('availableinprolink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
