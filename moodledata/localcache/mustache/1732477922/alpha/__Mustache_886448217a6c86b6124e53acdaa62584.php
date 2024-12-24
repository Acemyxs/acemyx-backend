<?php

class __Mustache_886448217a6c86b6124e53acdaa62584 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="quiz-timer-wrapper" class="mb-2">
';
        $buffer .= $indent . '    <div id="quiz-timer" class="quiz-timer-inner ml-auto" role="timer" aria-atomic="true" aria-relevant="text">
';
        $buffer .= $indent . '        <svg class="quiz-timer-icon mr-2" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="2"></circle>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-width="2" d="M12 8V12L14 14"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '        <span id="quiz-time-left"></span>
';
        $buffer .= $indent . '        <button type="button" class="btn btn-light btn-xs ml-3" id="toggle-timer" aria-controls="quiz-timer" aria-describedby="quiz-timer">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section3606119642bf61f69451caf279de56c8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section3606119642bf61f69451caf279de56c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hide, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hide, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
