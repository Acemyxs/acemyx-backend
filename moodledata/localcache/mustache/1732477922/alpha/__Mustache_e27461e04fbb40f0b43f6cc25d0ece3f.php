<?php

class __Mustache_e27461e04fbb40f0b43f6cc25d0ece3f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr data-prediction-id="';
        $value = $this->resolveValue($context->find('predictionid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="d-flex">
';
        $buffer .= $indent . '    <td class="insight-checkbox-cell col-1';
        $value = $context->find('bulkactions');
        if (empty($value)) {
            
            $buffer .= ' hidden';
        }
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('toggleslave'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '    <td class="col-8">
';
        $value = $context->find('sampleimage');
        $buffer .= $this->section88c02851fa57805522e9ba87cf2d5d0e($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sampledescription'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '    <td class="col-3';
        $value = $context->find('actions');
        if (empty($value)) {
            
            $buffer .= ' hidden';
        }
        $buffer .= '">
';
        $value = $context->find('actions');
        $buffer .= $this->section2c1699366ef14b58379cf2c8815ac940($context, $indent, $value);
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section88c02851fa57805522e9ba87cf2d5d0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{sampleimage}}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sampleimage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c1699366ef14b58379cf2c8815ac940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/action_menu}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
