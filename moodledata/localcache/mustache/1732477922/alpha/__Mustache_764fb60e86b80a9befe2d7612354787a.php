<?php

class __Mustache_764fb60e86b80a9befe2d7612354787a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
            $context->pushBlockContext(array(
                'label' => array($this, 'blockF2371b58ebd8d7849997969cd56fd306'),
                'placeholder' => array($this, 'block490a3889c9c6a3b0e7f997ba53aa062d'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section9a2e2e24e18974597642a4ec95edfce6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        searchcontentbankbyname, contentbank
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        searchcontentbankbyname, contentbank
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00428152be828048d971aaad6b6d8e11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        search, core
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '        search, core
';
                $buffer .= $indent . '    ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockF2371b58ebd8d7849997969cd56fd306($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section9a2e2e24e18974597642a4ec95edfce6($context, $indent, $value);
    
        return $buffer;
    }

    public function block490a3889c9c6a3b0e7f997ba53aa062d($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section00428152be828048d971aaad6b6d8e11($context, $indent, $value);
    
        return $buffer;
    }
}
