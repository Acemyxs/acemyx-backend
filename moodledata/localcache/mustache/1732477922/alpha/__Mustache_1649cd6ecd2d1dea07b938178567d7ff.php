<?php

class __Mustache_1649cd6ecd2d1dea07b938178567d7ff extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="eventlist my-1">
';
        $value = $context->find('events');
        $buffer .= $this->section4e1cea715cbece1697b5ba197fc28910($context, $indent, $value);
        $value = $context->find('events');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="alert alert-info calendar-information calendar-no-results">
';
            $buffer .= $indent . '            ';
            $blockFunction = $context->findInBlock('noeventsmessage');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            }
            $buffer .= '
';
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4e1cea715cbece1697b5ba197fc28910(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_calendar/event_item }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_calendar/event_item')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
