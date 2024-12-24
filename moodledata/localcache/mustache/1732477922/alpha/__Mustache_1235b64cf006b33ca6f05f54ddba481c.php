<?php

class __Mustache_1235b64cf006b33ca6f05f54ddba481c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="course-progressbar-wrapper">
';
        $buffer .= $indent . '    <div class="row no-gutters align-items-center">
';
        $buffer .= $indent . '        <div class="progressbar-container col">
';
        $buffer .= $indent . '            <span id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_status"></span>
';
        $buffer .= $indent . '            <div class="rui-progress rui-progress--value-';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_bar" class="rui-progress-bar" role="progressbar" aria-valuenow="';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-valuemin="0" aria-valuemax="100" style="width: ';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;" title="';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%" data-toggle="tooltip"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-progress-count">
';
        $buffer .= $indent . '            <svg class="icon mx-1" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75V4.75C16.0041 4.75 19.25 7.99594 19.25 12V12C19.25 16.0041 16.0041 19.25 12 19.25V19.25C7.99594 19.25 4.75 16.0041 4.75 12V12Z"></path>
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 12.75L10.1837 13.6744C10.5275 14.407 11.5536 14.4492 11.9564 13.7473L14.25 9.75"></path>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '            <span class="rui-progress-count-completed">';
        $value = $this->resolveValue($context->find('progresscountc'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '            <span class="rui-progress-count-total"> / ';
        $value = $this->resolveValue($context->find('progresscounttotal'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
