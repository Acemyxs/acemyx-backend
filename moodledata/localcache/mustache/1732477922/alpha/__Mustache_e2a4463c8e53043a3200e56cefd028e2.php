<?php

class __Mustache_e2a4463c8e53043a3200e56cefd028e2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true">
';
        $buffer .= $indent . '    <svg class="spinner" viewBox="0 0 50 50">
';
        $buffer .= $indent . '        <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
';
        $buffer .= $indent . '    </svg>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
