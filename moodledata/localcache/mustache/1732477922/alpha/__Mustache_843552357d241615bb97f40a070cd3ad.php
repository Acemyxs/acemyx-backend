<?php

class __Mustache_843552357d241615bb97f40a070cd3ad extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form action="';
        $value = $this->resolveValue($context->find('downloadurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" target="_blank" method="post" class="download-links more-details row m-0 ml-auto">
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
        $buffer .= $indent . '    <label class="download-label h5">';
        $value = $context->find('str');
        $buffer .= $this->section9b483af66442e5600fb4ec904d43f7e8($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    <button type="submit" class="a border-0 bg-white" name="type" value="pdf">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('pdf'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="pro-export-wrapper">
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/proexport')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <button type="button" class="a border-0 bg-white pro-export" name="type" value="csv">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('csv'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="lock-icon">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('lock'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="pro-export-wrapper">
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/proexport')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <button type="button" class="a border-0 bg-white pro-export" name="type" value="excel">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('xls'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="lock-icon">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('lock'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="pro-export-wrapper">
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/proexport')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <button type="button" class="a ml-2 btn theme-primary-text theme-primary-border bg-white pro-export" name="type" value="email">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section73bca0f94438596e84131bb66e243ae1($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="lock-icon">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('lock'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';

        return $buffer;
    }

    private function section9b483af66442e5600fb4ec904d43f7e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' downloadreport, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' downloadreport, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bca0f94438596e84131bb66e243ae1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' schedule, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' schedule, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
