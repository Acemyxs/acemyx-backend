<?php

class __Mustache_633a4a558b7c7910de8f7c0660b0fa86 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form method="post" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="mb-1" role="search" id="request_filter_form">
';
        $buffer .= $indent . '    <label for="request-filters" class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->sectionE034b3b6bb4fc0bffb77447d74d7ee51($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    <select name="request-filters[]" id="request-filters" multiple="multiple" class="form-autocomplete-original-select">
';
        $value = $context->find('filteroptions');
        $buffer .= $this->section0bfe2f75dc6b92dc689bdccc99b533e9($context, $indent, $value);
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '    <input type="hidden" id="filters-cleared" name="filters-cleared" value="0" />
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->sectionDb74ee16acef21af9f099e7bc1880747($context, $indent, $value);

        return $buffer;
    }

    private function sectionE034b3b6bb4fc0bffb77447d74d7ee51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filters';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filters';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bfe2f75dc6b92dc689bdccc99b533e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{{label}}}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb74ee16acef21af9f099e7bc1880747(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_dataprivacy/request_filter\'], function(Filter) {
    Filter.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_dataprivacy/request_filter\'], function(Filter) {
';
                $buffer .= $indent . '    Filter.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
