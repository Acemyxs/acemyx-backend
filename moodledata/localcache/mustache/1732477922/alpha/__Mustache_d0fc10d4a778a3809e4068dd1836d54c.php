<?php

class __Mustache_d0fc10d4a778a3809e4068dd1836d54c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-inline-flex align-items-center w-100 rui-mo-progress-';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="rui-mo-progress-icon--progress">
';
        $buffer .= $indent . '        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="rui-mo-progress-icon--done">
';
        $buffer .= $indent . '        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75V4.75C16.0041 4.75 19.25 7.99594 19.25 12V12C19.25 16.0041 16.0041 19.25 12 19.25V19.25C7.99594 19.25 4.75 16.0041 4.75 12V12Z"></path>
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 12.75L10.1837 13.6744C10.5275 14.407 11.5536 14.4492 11.9564 13.7473L14.25 9.75"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="pl-0 ml-0 pr-0 ml-md-2 pr-md-0 col">
';
        $buffer .= $indent . '        <div class="small mb-1">
';
        $buffer .= $indent . '            <span class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section0293e8a3f68f0093fe0cb72d27aa2c88($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section03f4aa70715dd241c8f716b38d9ce067($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="rui-mo-progress rui-progress mb-2">
';
        $buffer .= $indent . '            <div class="rui-progress-bar bar" role="progressbar" aria-valuenow="';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" style="width: ';
        $value = $this->resolveValue($context->find('progress'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%" aria-valuemin="0" aria-valuemax="100"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section0293e8a3f68f0093fe0cb72d27aa2c88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseprogress, block_myoverview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:courseprogress, block_myoverview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03f4aa70715dd241c8f716b38d9ce067(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completepercent, block_myoverview, <strong>{{progress}}</strong>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completepercent, block_myoverview, <strong>';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
