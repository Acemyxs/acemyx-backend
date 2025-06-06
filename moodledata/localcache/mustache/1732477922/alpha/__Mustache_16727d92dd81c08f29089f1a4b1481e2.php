<?php

class __Mustache_16727d92dd81c08f29089f1a4b1481e2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="my-2 ml-auto">
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->find('reseturl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="btn btn-sm btn-outline-dark action-link ml-1" data-action="reset">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->sectionFeaf80db1e802ceee89c389623798102($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionFeaf80db1e802ceee89c389623798102(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'resetcolumns, qbank_columnsortorder';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'resetcolumns, qbank_columnsortorder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
