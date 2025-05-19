<?php

class __Mustache_607fb2f3eef15e3063d237abd95756ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="navitem">
';
        $buffer .= $indent . '            <h2 class="h4">';
        $value = $this->resolveValue($context->find('header'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h2>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="navitem-divider"></div>
';
        $buffer .= $indent . '        <div class="navitem align-items-center">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('tradeurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section184ab53b3f521ce7ed3c645d9a7eb84a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="navitem align-items-center">/</div>
';
        $buffer .= $indent . '        <div class="navitem align-items-center">
';
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('offerurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section75ed6653788e8990cb6bb66ad4c823e7($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="navitem-divider"></div>
';
        $value = $context->find('other');
        $buffer .= $this->section32d2a98a080728a8673d1fe698c5981b($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section184ab53b3f521ce7ed3c645d9a7eb84a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tradecenter, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tradecenter, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75ed6653788e8990cb6bb66ad4c823e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'offers, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'offers, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32d2a98a080728a8673d1fe698c5981b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="navitem">
                {{>block_stash/item_selector}}
        </div>
        <div class="navitem">
                {{>block_stash/user_selector}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('block_stash/item_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('block_stash/user_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
