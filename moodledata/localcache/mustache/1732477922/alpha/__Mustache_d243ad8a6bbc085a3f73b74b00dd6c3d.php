<?php

class __Mustache_d243ad8a6bbc085a3f73b74b00dd6c3d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('downloadurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" target="_blank" method="post" class="download-links dropdown-item px-0 m-0 ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' ';
        $value = $context->find('pro');
        $buffer .= $this->section615c8d6f8b64085851ea081987a408a4($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="block" value="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="filter" value="';
        $value = $this->resolveValue($context->find('filter'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="cohortid" value="';
        $value = $this->resolveValue($context->find('cohortid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="region" value="';
        $value = $this->resolveValue($context->find('region'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" />
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <button type="';
        $value = $context->find('type');
        $buffer .= $this->section1123354f5ceef3c38ba329187f298c85($context, $indent, $value);
        $value = $context->find('type');
        if (empty($value)) {
            
            $buffer .= 'submit';
        }
        $buffer .= '" class="a border-0 bg-transparent dropdown-item m-0 w-100 ';
        $value = $this->resolveValue($context->find('btnclass'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" name="type" value="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('pro');
        $buffer .= $this->section0283615f185635737e8da83fb178358c($context, $indent, $value);
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section615c8d6f8b64085851ea081987a408a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pro-highlight';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pro-highlight';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1123354f5ceef3c38ba329187f298c85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{type}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0283615f185635737e8da83fb178358c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
