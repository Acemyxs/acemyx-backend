<?php

class __Mustache_880478fe36c1d3f33d88453e36727321 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('branches');
        $buffer .= $this->section6cc03446a47900be46ddff77a55733bf($context, $indent, $value);

        return $buffer;
    }

    private function section6cc03446a47900be46ddff77a55733bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav class="nav-pills flex-column">
        {{> tool_dataprivacy/context_tree_node}}
    </nav>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <nav class="nav-pills flex-column">
';
                if ($partial = $this->mustache->loadPartial('tool_dataprivacy/context_tree_node')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </nav>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
