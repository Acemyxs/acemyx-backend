<?php

class __Mustache_790a24b54a4b48adf04c4d41730168ba extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="search-widget dropdown d-flex" data-searchtype="block_stash-item">
';
        $buffer .= $indent . '    <button aria-expanded="false" data-toggle="dropdown" class="btn dropdown-toggle d-flex text-left align-items-center p-0" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionB95216fc865bda4208cc2001f90c3f3b($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="align-items-center d-flex">
';
        $value = $context->find('selectedoption');
        $buffer .= $this->section5a94c8ff52aac5d69f33fcca4aab93d4($context, $indent, $value);
        $value = $context->find('selectedoption');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="user-info d-block pr-3">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('str');
            $buffer .= $this->sectionB95216fc865bda4208cc2001f90c3f3b($context, $indent, $value);
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

    private function sectionB95216fc865bda4208cc2001f90c3f3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectanitem, block_stash ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectanitem, block_stash ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a94c8ff52aac5d69f33fcca4aab93d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-block pr-3">
                    <span class="d-block small">
                        {{#str}} selectanitem, block_stash {{/str}}
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
                $buffer .= $this->sectionB95216fc865bda4208cc2001f90c3f3b($context, $indent, $value);
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
