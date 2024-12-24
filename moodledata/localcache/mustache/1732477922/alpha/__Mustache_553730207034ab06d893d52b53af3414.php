<?php

class __Mustache_553730207034ab06d893d52b53af3414 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <!-- Question bank -->
';
        $buffer .= $indent . '    <div id="questionbank_container">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('questionbank'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <!-- submit buttons -->
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('returnurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="POST" id="update_filter_condition_form" data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-slotid="';
        $value = $this->resolveValue($context->find('slotid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="message" value="">
';
        $buffer .= $indent . '        <input type="submit" class="btn btn-primary" name="update" value="';
        $value = $context->find('str');
        $buffer .= $this->section55371b62817cb3c1cedfe848e4aa12b7($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="submit" class="btn btn-secondary" name="cancel" value="';
        $value = $context->find('str');
        $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section55371b62817cb3c1cedfe848e4aa12b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' updatefilterconditon, mod_quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' updatefilterconditon, mod_quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
