<?php

class __Mustache_ac56e5fa0f15178371f41e53810d03f1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="dropdown blocksetting ml-2">
';
        $buffer .= $indent . '    <button tabindex="0" class="text-body dropdown-toggle icon-no-margin" id="blocksetting-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-toggle="dropdown">
';
        $buffer .= $indent . '        <i class="icon fa fa-cog fa-fw " title="Actions menu" aria-label="Actions menu"></i>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right menu align-tr-br" aria-labelledby="blocksetting-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('pro');
        if (empty($value)) {
            
            $buffer .= $indent . '        <a href="#" class="dropdown-item" data-contextid="';
            $value = $this->resolveValue($context->find('contextid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-blockname="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" data-action="edit">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->section4e736cf82ffdc009ad4df93dcb02d06b($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </a>
';
        }
        $buffer .= $indent . '        <a href="#" class="dropdown-item" data-contextid="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-blockname="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-action="hide" data-hidden="';
        $value = $this->resolveValue($context->find('hidden'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('hiddenblock');
        $buffer .= $this->sectionBb111f7caa01ba6e3e3b80d07ca1d125($context, $indent, $value);
        $value = $context->find('hiddenblock');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            $value = $context->find('str');
            $buffer .= $this->section3cb84246b86f2d5b18b4533d97e91121($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </a>
';
        $value = $context->find('pro');
        if (empty($value)) {
            
            $value = $context->find('caneditadv');
            $buffer .= $this->section0c9c476d273fc1924cb89e9a155f6b45($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4e736cf82ffdc009ad4df93dcb02d06b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editblockview, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editblockview, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0708ddd843fb9bdc1008063ed5b63b89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unhide, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unhide, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb111f7caa01ba6e3e3b80d07ca1d125(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#str}} unhide, local_edwiserreports {{/str}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section0708ddd843fb9bdc1008063ed5b63b89($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cb84246b86f2d5b18b4533d97e91121(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hide, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hide, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section351764edf38bf01c97e47ca936a95aaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editcapability, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editcapability, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c9c476d273fc1924cb89e9a155f6b45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="#" class="dropdown-item" data-contextid="{{contextid}}" data-blockname="{{id}}" data-action="editcap">
            {{#str}} editcapability, local_edwiserreports {{/str}}
        </a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="#" class="dropdown-item" data-contextid="';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-blockname="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="editcap">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section351764edf38bf01c97e47ca936a95aaf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
