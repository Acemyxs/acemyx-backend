<?php

class __Mustache_ad9511f1b4f3ae9a86e16d120486f948 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('breadcrumb');
        $buffer .= $this->section258bea6b4899e11a28bb0b309aedc095($context, $indent, $value);

        return $buffer;
    }

    private function section85f0f38e32ade9a2cb4c54633d36fc0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="breadcrumb-item">
                    {{{item}}}
                </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="breadcrumb-item">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('item'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section258bea6b4899e11a28bb0b309aedc095(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="d-flex flex-wrap" >
    <div id="page-navbar">
        <nav aria-label="Navigation bar">
            <ol class="breadcrumb">
                {{#items}}
                <li class="breadcrumb-item">
                    {{{item}}}
                </li>
                {{/items}}
            </ol>
        </nav>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="d-flex flex-wrap" >
';
                $buffer .= $indent . '    <div id="page-navbar">
';
                $buffer .= $indent . '        <nav aria-label="Navigation bar">
';
                $buffer .= $indent . '            <ol class="breadcrumb">
';
                $value = $context->find('items');
                $buffer .= $this->section85f0f38e32ade9a2cb4c54633d36fc0c($context, $indent, $value);
                $buffer .= $indent . '            </ol>
';
                $buffer .= $indent . '        </nav>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
