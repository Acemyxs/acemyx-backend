<?php

class __Mustache_ea31b0c422c66393277f820423d00948 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<b>
';
        $buffer .= $indent . '    <a title="';
        $value = $context->find('str');
        $buffer .= $this->section0e9f217176455bbbc0acb4b86398af19($context, $indent, $value);
        $buffer .= '" href="';
        $value = $this->resolveValue($context->find('questionbankurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('categoryname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('idnumber');
        $buffer .= $this->sectionA83053c7f63dc4368a5411bd29432c11($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('questioncount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</b>
';
        $value = $context->find('categorydesc');
        $buffer .= $this->section9ac6397f0d6ceb14ae68c5e8381a59ef($context, $indent, $value);
        $value = $context->find('deleteurl');
        $buffer .= $this->section6f35109efca98db47b462a00c22b4940($context, $indent, $value);

        return $buffer;
    }

    private function section0e9f217176455bbbc0acb4b86398af19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editquestions, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editquestions, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA76d61152937870ebe8ba5129392f2c5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'idnumber, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'idnumber, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA83053c7f63dc4368a5411bd29432c11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="badge bg-primary text-white">
            <span class="accesshide">
                {{#str}}idnumber, question{{/str}}
            </span>
            {{idnumber}}
        </span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="badge bg-primary text-white">
';
                $buffer .= $indent . '            <span class="accesshide">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionA76d61152937870ebe8ba5129392f2c5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ac6397f0d6ceb14ae68c5e8381a59ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="text_to_html">
    {{{categorydesc}}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="text_to_html">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('categorydesc'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a2080dd3e2271a5b0fc821d258225cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/delete, core, {{deletetitle}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/delete, core, ';
                $value = $this->resolveValue($context->find('deletetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f35109efca98db47b462a00c22b4940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a title="{{deletetitle}}" href="{{{deleteurl}}}">
    {{# pix }} t/delete, core, {{deletetitle}} {{/ pix }}
</a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<a title="';
                $value = $this->resolveValue($context->find('deletetitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" href="';
                $value = $this->resolveValue($context->find('deleteurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '    ';
                $value = $context->find('pix');
                $buffer .= $this->section6a2080dd3e2271a5b0fc821d258225cd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
