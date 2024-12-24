<?php

class __Mustache_6e4328888b687279919a746e43112a7b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="server_last_24_hours_usage has-loader">
';
        $value = $context->find('error');
        $buffer .= $this->section9a9a78f4ddb7f3b984f41a45620e2323($context, $indent, $value);
        $buffer .= $indent . '    <div class="server_usage_chart">
';
        $value = $context->find('hasdates');
        $buffer .= $this->section19e749e00f4d8571e568024ad77cb439($context, $indent, $value);
        $buffer .= $indent . '        <canvas class="esm_usage_chart" id="esm_usage_chart"></canvas>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="cannot_display_server_usage">
';
        $buffer .= $indent . '        <label>';
        $value = $context->find('str');
        $buffer .= $this->section25cd6ae6b38ae50b59aa6c8774d16637($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="edwiser-server-monitor-loader">
';
        $buffer .= $indent . '        <div class="edwiser-server-monitor-loading-icon">
';
        $buffer .= $indent . '            <i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true"></i>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9a9a78f4ddb7f3b984f41a45620e2323(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="text-center">{{{error}}}</div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="text-center">';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78593f7359d32cbf448c8ea2aaf69d8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{stamp}}" {{selected}}>{{date}}</option>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('stamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $this->resolveValue($context->find('selected'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '>';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19e749e00f4d8571e568024ad77cb439(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <select class=\'form-control\' id=\'esm_usage_date_selector\'>
            {{#dates}}
                <option value="{{stamp}}" {{selected}}>{{date}}</option>
            {{/dates}}
        </select>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <select class=\'form-control\' id=\'esm_usage_date_selector\'>
';
                $value = $context->find('dates');
                $buffer .= $this->section78593f7359d32cbf448c8ea2aaf69d8d($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25cd6ae6b38ae50b59aa6c8774d16637(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cannotshowonsidebar, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cannotshowonsidebar, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
