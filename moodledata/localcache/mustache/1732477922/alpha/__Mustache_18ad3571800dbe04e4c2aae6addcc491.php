<?php

class __Mustache_18ad3571800dbe04e4c2aae6addcc491 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasitems');
        $buffer .= $this->section5a2663e97fbc7dc2bd125a7e6ec8ea03($context, $indent, $value);

        return $buffer;
    }

    private function section139d33572f513aea14b2b6d8837046ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-infobox pl-3">
            <h5 class="rui-infobox-title">{{{title}}}</h5>
            <div class="rui-infobox-content--small">{{{content}}}</div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-infobox pl-3">
';
                $buffer .= $indent . '            <h5 class="rui-infobox-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '            <div class="rui-infobox-content--small">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a2663e97fbc7dc2bd125a7e6ec8ea03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="rui-summary-table quizreviewsummary mb-0">
    <div class="rui-info-container rui-quizreviewsummary">
    {{#items}}
        <div class="rui-infobox pl-3">
            <h5 class="rui-infobox-title">{{{title}}}</h5>
            <div class="rui-infobox-content--small">{{{content}}}</div>
        </div>
    {{/items}}
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="rui-summary-table quizreviewsummary mb-0">
';
                $buffer .= $indent . '    <div class="rui-info-container rui-quizreviewsummary">
';
                $value = $context->find('items');
                $buffer .= $this->section139d33572f513aea14b2b6d8837046ff($context, $indent, $value);
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
