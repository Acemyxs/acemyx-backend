<?php

class __Mustache_b784bb9cf442baa07b227aa5dd4e1e66 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="search-widget dropdown d-flex" data-searchtype="block_stash-user">
';
        $buffer .= $indent . '    <button aria-expanded="false" data-toggle="dropdown" class="btn dropdown-toggle d-flex text-left align-items-center p-0" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section03cfa9fd69b21edd56a956f1643fc6e2($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="align-items-center d-flex">
';
        $value = $context->find('selectedoption');
        $buffer .= $this->sectionD5039eff1df73d2a15bf5b7ff569baa1($context, $indent, $value);
        $value = $context->find('selectedoption');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="user-info d-block pr-3">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('str');
            $buffer .= $this->section03cfa9fd69b21edd56a956f1643fc6e2($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu wide">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section03cfa9fd69b21edd56a956f1643fc6e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectauser, block_stash ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectauser, block_stash ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5039eff1df73d2a15bf5b7ff569baa1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-block pr-3">
                    <span class="d-block small">
                        {{#str}} selectauser, block_stash {{/str}}
                    </span>
                    <span class="p-0 font-weight-bold">
                        {{text}}
                    </span>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-block pr-3">
';
                $buffer .= $indent . '                    <span class="d-block small">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section03cfa9fd69b21edd56a956f1643fc6e2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <span class="p-0 font-weight-bold">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
