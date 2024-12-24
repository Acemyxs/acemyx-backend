<?php

class __Mustache_2ffddf91de55c07c20e43737ff26e91b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('js');
        $buffer .= $this->sectionF89221135587ce676510065c2eb26b98($context, $indent, $value);

        return $buffer;
    }

    private function sectionF89221135587ce676510065c2eb26b98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    $(document).ready(function() {
        $(\'.more-nav .nav-item .nav-link.active\').removeClass(\'active\');
        $(\'.more-nav .nav-item [href="{{activeurl}}"]\').addClass(\'active\');
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    $(document).ready(function() {
';
                $buffer .= $indent . '        $(\'.more-nav .nav-item .nav-link.active\').removeClass(\'active\');
';
                $buffer .= $indent . '        $(\'.more-nav .nav-item [href="';
                $value = $this->resolveValue($context->find('activeurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"]\').addClass(\'active\');
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
