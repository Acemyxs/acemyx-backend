<?php

class __Mustache_d96a5d2c7eaec3644992710b7a736cda extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="activity-navigation container-fluid px-0 mt-4">
';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'blockA2c8cb815e589ccf0a108e6a0beabfc6'),
                'column2' => array($this, 'blockA44022d06974f56d33f01076fe006b72'),
                'column3' => array($this, 'blockCd51d188f00af06b2090399be054cf07'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section44127fdbcbf2aefffbca398ae5c6ce17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core_course/action_link_sm_prev }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/action_link_sm_prev')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD285a770fd3af626515426514ba46f19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core_course/url_select }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section810929787ff8a30b08ff7f45c37e0d6a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core_course/action_link_sm_next }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/action_link_sm_next')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA2c8cb815e589ccf0a108e6a0beabfc6($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="float-left">
';
        $buffer .= $indent . '            ';
        $value = $context->find('prevlink');
        $buffer .= $this->section44127fdbcbf2aefffbca398ae5c6ce17($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }

    public function blockA44022d06974f56d33f01076fe006b72($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="mdl-align">
';
        $buffer .= $indent . '            ';
        $value = $context->find('activitylist');
        $buffer .= $this->sectionD285a770fd3af626515426514ba46f19($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }

    public function blockCd51d188f00af06b2090399be054cf07($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="float-right">
';
        $buffer .= $indent . '            ';
        $value = $context->find('nextlink');
        $buffer .= $this->section810929787ff8a30b08ff7f45c37e0d6a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
    
        return $buffer;
    }
}
