<?php

class __Mustache_468fb176719426b94b1c6c0f861542a3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="d-grid gap-2 flex-wrap d-md-flex justify-content-start mb-5">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('controls'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
