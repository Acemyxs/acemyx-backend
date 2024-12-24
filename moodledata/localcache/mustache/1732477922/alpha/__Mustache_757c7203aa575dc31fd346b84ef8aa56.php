<?php

class __Mustache_757c7203aa575dc31fd346b84ef8aa56 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-select-inline')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
